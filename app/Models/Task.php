<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $guarded = [];
  // protected $fillable = ['title', 'description', 'date', 'status'];


        // public function user()
        // {
        //     return $this->belongsTo(User::class, 'foreign_key');
        // }




    // protected $fillable = ["name","email"];
}
