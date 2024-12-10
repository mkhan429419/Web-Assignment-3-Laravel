<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PricingPlan extends Model
{
    protected $fillable = [
        'name',
        'price',
        'rate',
        'description'
    ];  // making these fields mass-assignable
}
