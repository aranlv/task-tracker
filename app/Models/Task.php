<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 'desc', 'dueDate', 'status', 'image', 'categoryID'
    ];

    public function category(){
        return $this->belongsTo
        (Category::class, 'categoryID');
    }
}
