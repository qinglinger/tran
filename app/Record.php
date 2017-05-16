<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    //
    public $timestamps = true;
    protected $table = "record";
    protected $primaryKey = "recordID";
    protected $casts = ["recordID" => "INT"];

    protected $recordText = 'recordText';
    protected $recordID = 'recordID';

    protected $fillable = ['recordText'];
}
