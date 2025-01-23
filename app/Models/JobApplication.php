<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobApplication extends Model
{
    protected $fillable = [
        'company', 
        'job', 
        'status', 
        'location', 
        'responsibilities', 
        'allowance', 
        'platform',
    ];
}
