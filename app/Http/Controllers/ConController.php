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

    public function outputInterface(Request $request){
        $query = DB::table('record')->orderBy('updated_at', 'DESC')->get();

        $data = [
            "posts" => $query
        ];
        return $data;
//        return view('output', $data);
    }

//    public function output(Request $request){
//        $query = DB::table('record')->get();
//
//        $data = [
//            "posts" => $query
//        ];
//        return $data;
//    }


    public function output(Request $request){
        $query = DB::table('record')->paginate(2);

        $data = [
            "posts" => $query
        ];
//        return $data;
        return view('output', $data);
    }
}
