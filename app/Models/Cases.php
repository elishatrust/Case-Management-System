<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cases extends Model
{
    use HasFactory;

    protected $fillable = [
        'case_title',
        'client_name',
        'court',
        'alleged',
        'hearing_date',
        'billing'
    ];
}
