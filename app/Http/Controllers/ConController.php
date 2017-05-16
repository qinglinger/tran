<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Record as Record;

class ConController extends Controller
{
    public function input(Request $request){
        $text = $request->get('inputText');
        echo $text;

        $record = new Record();

        $record->recordText = $text;
        $record->save();

        return view('input');
    }

    public function output(Request $request){
        $query = DB::table('record')->get();

        $data = [
            "posts" => $query
        ];

        return view('output', $data);
    }
}
