<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    // memberitahu bahwa yang bisa diisi secara mass adalah 3 dibawah
    // protected $fillable = ['title','excerpt','body'];
    // sama saja seperti diatas hanya saja yang tidak bisa diisi adalah id
    protected $guarded = ['id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}
