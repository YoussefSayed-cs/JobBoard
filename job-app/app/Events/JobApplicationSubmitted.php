<?php

namespace App\Events;

use App\Models\job_application;
use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class JobApplicationSubmitted
{
    use Dispatchable, SerializesModels;

    
    public function __construct(
        public readonly User            $jobSeeker,
        public readonly job_application $application,
    ) {}
}
