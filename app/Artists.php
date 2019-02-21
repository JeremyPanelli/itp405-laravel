<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artists extends Model
{
  protected $primaryKey = 'ArtistId';
  public $timestamps = false;
    public function albums()    {
      return $this->hasMany('App\Albums', 'ArtistId');
    }
}
