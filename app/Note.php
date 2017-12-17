<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class Note extends Model
{
    protected $fillable = ["name", "content", "uid"];

    public static function read($uid)
    {
      return Note::where('uid', $uid)->firstOrFail();
    }
}
