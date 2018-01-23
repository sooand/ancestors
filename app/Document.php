<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'document';

    /**
     * Get all of the owning uploadable models.
     */
    public function uploadable()
    {
        return $this->morphTo();
    }

    public function type() {
      $this->hasOne('App\DocumentType', 'documentType_id');
    }
}
