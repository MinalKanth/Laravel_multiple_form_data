<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb3 extends Model
{
    use HasFactory;

    protected $table = 'tb3';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tb1_id',
        'skill',
        'value',
        ];

}
