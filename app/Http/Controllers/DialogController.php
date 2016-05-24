<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Cmessage;
use App\Http\Requests;

class DialogController extends Controller{
  public function index(){
    return view('client.dialog.index');
  }

  public function history(){
    return view('client.dialog.history');
  }

  public function store(){
    $cmessage = new Cmessage();
    $cmessage->content = request()->input('message');
    auth()->user()->cmessages()->save($cmessage);
  }
}
