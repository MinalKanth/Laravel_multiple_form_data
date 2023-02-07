<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb2 extends Model
{
    use HasFactory;

    protected $table = 'tb2';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tb1_id',
        'platform_title',
        'description',
        ];

    // protected $casts = [
    //     'platform_title' => 'array',
    //     'description' => 'array'
    //     ];
//     public function tb1()
// {
//     return $this->hasMany(tb2::class);
// }
}
