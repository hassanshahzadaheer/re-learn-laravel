<?php

namespace App\Jobs;

use App\Models\Job;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class TranslateJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public Job $jobListing;
    
    public function __construct(Job $jobListing)
    {
        $this->jobListing = $jobListing;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
        logger("Translating " . $this->jobListing->title . ' '. "into Urdu");
    }
}
