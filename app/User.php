<?php

namespace App;

use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject
{
  use Notifiable;

  //add profile picture to all instances user is quried
  protected $appends = array('picture');

  //get users profile picture uri from documents table
  public function getPictureAttribute() {
    $picture = DB::table('users')->join('document', 'users.id', '=', 'document.idRef')->where('document.tableRef', '=', 'users')->where('type', '=', 'profile_picture')->first();
    if ($picture != null || $picture != '') {
      return '/storage/'.$picture->source;
    } else {
      return null;
    }
  }

  function person() {
    return $this->belongsTo('App\Person', 'person_id');
  }

  public function ownerships() {
    //returnere ownershow records
    return;
  }


  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'name', 'email', 'password',
  ];

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token',
  ];

    /**
     * @return int
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }
}
