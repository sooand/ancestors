<?php

namespace App\Http\Controllers\Settings;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

use App\Document;
use App\DocumentType;

class ProfileController extends Controller
{
    /**
     * Update the user's profile information.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $user = $request->user();

        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
        ]);

        return tap($user)->update($request->only('name', 'email'));
    }

    public function upload(Request $request)
    {
        $user = $request->user();

        //validate image
        $this->validate($request, [
          'file' => 'required|image'
        ]);

        //save image to storage
        $image = $request->file;
        //create unique image name
        $fileName = time() . '.' . $image->getClientOriginalExtension();
        //store image and get stored path
        $path = $image->storeAs('profile_picture', $fileName);

        if ($user->picture != null || $user->picture != '') {
            //if picture already exists, update existing record and delete old image
            $picture = DB::table('users')->join('document', 'users.id', '=', 'document.idRef')->where('document.tableRef', '=', 'users')->where('type', '=', 'profile_picture')->first();
            $document = Document::where('id', '=', $picture->id)->first();
            Storage::delete($picture->source);
        } else {
            $document = new Document;
        }

        //save image to database documents
        $document->type = 'profile_picture';
        $document->tableRef = 'users';
        $document->idRef = $user->id;
        $document->source = $path;
        $document->documentType_id = 1;
        $document->save();
    }
}
