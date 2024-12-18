<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job extends Model
{
    /** @use HasFactory<\Database\Factories\JobFactory> */
    use HasFactory;
    public function employer()
    {
        return $this->belongsTo(employer::class);
    }
    public function tag(string $name)
    {
        $tag=tag::firstorcreate(['name'=>$name]);
        
        $this->tags()->attach($tag);
    }
    public function tags()
    {
        return $this->belongsToMany(tag::class);
    }
}
