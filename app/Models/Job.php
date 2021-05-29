<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    /**
     * Get all of the applies for the Job
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function applies()
    {
        return $this->hasMany(Apply::class);
    }
}
