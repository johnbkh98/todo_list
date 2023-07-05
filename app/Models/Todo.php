<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
  use HasFactory;
  public $table = 'todo';

  protected $fillable = ['todo', 'completed_at'];

  public function isComplete () {
   return (!is_null($this->completed_at)) ? true : false;
  }
}
