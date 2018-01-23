<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Auth;

class Gender extends Model
{
    protected $table = 'gender';

    /*public function translation() {
        return $this->morphOne('App\Translation', 'table', 'tableRef', 'idRef', 'language_code');
    }*/

    public static function translationLookup() {
      return DB::table('gender')->join('translation', 'gender.id', '=', 'translation.idRef')->where('translation.tableRef', '=', 'gender')->where('language_code', '=', Auth::user()->language_code)->get();
    }
}
