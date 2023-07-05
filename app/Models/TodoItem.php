<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TodoItem extends Model
{
  use HasFactory;
  public $table = 'todo_item';

  protected $fillable = ['todo_item', 'todo_id'];
}
