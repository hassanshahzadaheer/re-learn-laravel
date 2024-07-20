<?php
namespace Tests\Unit;

use App\Models\Employer;
use App\Models\Job;

it('belongs to an employer' ,function () {

    $employer = Employer::factory()->create();
    $job = Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

    expect($job->employer->is($employer))->toBeTrue();

});


it ('has a unique tag', function (){
    $job = Job::factory()->create();

    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
