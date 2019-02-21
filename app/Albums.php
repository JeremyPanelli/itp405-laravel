<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Albums extends Model
{
  protected $primaryKey = 'AlbumId';
  public $timestamps = false;
    public function artists()    {
      return $this->belongsTo('App\Artists', 'ArtistId');
    }
}
