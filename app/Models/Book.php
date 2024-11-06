<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //

    public function genre()
    {
        return $this->belongsTo(Genre::class);
    }

    public function reserves()
    {
        return $this->hasMany(Reserve::class);
    }

    public function users()
    {
        return $this->belongsToMany(Book::class, 'reserve', 'book_id', 'user_id');
    }
}
