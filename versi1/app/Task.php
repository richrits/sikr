<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    //
    protected $table = 'pekerjaan';
    protected $fillable = [
        'judul',
        'detail',
        'deadline',
        'userid'
      ];
}
