<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function submit(Request $request){
        $this->validate($request, [
            'Name' => 'required',
            'email' => 'required'
        ]);

        return 'SUCCESS';
    }
}
