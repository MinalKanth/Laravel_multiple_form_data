<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb4 extends Model
{
    use HasFactory;

    protected $table = 'tb4';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tb1_id',
        'collage_name',
        'e_start_from',
        'e_end_at',
        'e_description',
        ];
}
