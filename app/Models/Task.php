<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    // /**
    //  * Các cột có thể được gán hàng loạt.
    //  *
    //  * @var array
    //  */
    protected $fillable = [
        'title',
        'description',
        'long_description',
        'completed',
    ];

    // /**
    //  * Cấu hình kiểu dữ liệu tự động cast.
    //  *
    //  * @var array
    //  */
    // protected $casts = [
    //     'completed' => 'boolean',
    // ];
}

