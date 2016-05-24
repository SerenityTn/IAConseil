<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cmessage extends Model{
  public function users(){
    $this->belongsToOne('App\User');
  }
}
