<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Request extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'employer_id',
        'request_description',
        'is_accepted',
        'created_at',
        'modified_at'
    ];
}
