<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contact extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'name',
        'email',
        'nomor_telepon',
        'date',
        'text',
        'image',
        'video',
        'file',
    ];

    protected $searchableFields = ['*'];

    protected $casts = [
        'date' => 'date',
    ];
}
