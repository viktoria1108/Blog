<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BlogCategory extends Model
{
    use SoftDeletes;

    protected $fillable
        = [
            'title',
            'slug',
            'parent_id',
            'description',
        ];

    public static function paginate(int $int)
    {
    }

    public function create($data)
    {
    }
}
