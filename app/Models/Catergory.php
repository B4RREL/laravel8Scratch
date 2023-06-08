<?php

namespace App\Models;

use App\Models\Post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Catergory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

   // We will also use Eloquent Realtionships to connect Post Model

   public function posts()
    {
        return $this->hasMany(Post::class);
    }
}
