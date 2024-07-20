<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
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


    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate([
            'name' => $name,
        ]);

        $this->tags()->attach($tag);

    }

    public function tags() : BelongsToMany {
        return $this->belongsToMany(Tag::class, 'job_tag', 'job_listing_id', 'tag_id');
    }

    public function employer(): BelongsTo
    {
        return $this->belongsTo(Employer::class);
    }

    public function jobs(): BelongsToMany
    {
        return $this->belongsToMany(Job::class);
    }

}
