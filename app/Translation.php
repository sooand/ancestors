<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Translation extends Model
{
    protected $table = 'translation';

    public function translate() {
      return $this->morphTo();
    }

}
