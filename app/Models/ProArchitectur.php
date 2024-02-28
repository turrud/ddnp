<?php

namespace App\Models;

use App\Models\Scopes\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProArchitectur extends Model
{
    use HasFactory;
    use Searchable;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'image',
        'imgurl',
        'text',
        'file',
        'video',
        'url',
    ];

    protected $searchableFields = ['*'];

    protected $table = 'pro_architecturs';
}
