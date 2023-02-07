<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tb5 extends Model
{
    use HasFactory;
    protected $table = 'tb5';
    protected $primaryKey = 'id';

    protected $fillable = [
        'tb1_id',
        'company_name',
        'job_title',
        'w_location',
        'w_start_from',
        'w_end_at',
        'w_description',
        ];

}
