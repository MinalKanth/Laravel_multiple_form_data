<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb1 extends Model
{
    use HasFactory;

    protected $table = 'tb1';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'date',
        'profession',
        'bio',
        'country',
        'address',
        'location',
        'phone',
        'email',
        'website',
        'linkedin',
        'twitter',
        'facebook',
        'github',
        'image',
    ];
    // public function tb2()
    // {
    // 	return $this->belongsToMany(tb2::class);
    // }
//     public function tb2()
// {
//     return $this->belongsTo(tb1::class);
// }
}
