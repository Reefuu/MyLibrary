<?php

namespace App\Models;

use App\Models\Writer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "synopsis",
        "coverphoto",
        "writer_id"
    ];

    public function writer(): BelongsTo
    {
        return $this->belongsTo(Writer::class);
    }
}
