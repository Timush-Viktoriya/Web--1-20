<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

// У файлі app/Models/Book.php

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo(Author::class);
    }
}