<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Note;
use App\Http\Resources\Note as NoteResource;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class NoteController extends Controller
{

    public function fetch ()
    {
      return NoteResource::collection(Note::all());
    }

    public function create (Request $r)
    {
      $note = Note::create([
        "name" => $r->name,
        "content" => $r->content,
        "uid" => uniqid()
      ]);
      return $this->read($note->uid);
    }

    public function read ($uid)
    {
      return new NoteResource(Note::read($uid));
    }

    public function update (Request $r)
    {

    }

    public function delete (Request $r)
    {

    }
}
