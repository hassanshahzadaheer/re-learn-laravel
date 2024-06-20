<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table = 'job_listing';
    use HasFactory;

    protected $fillable = [
        'title',
        'salary',
        'time',
        'employer_id'
    ];


    public function employer() {
        return $this->belongsTo(Employer::class);
    }

    public function jobs()
    {
        return $this->belongsToMany(Job::class);
    }

}
