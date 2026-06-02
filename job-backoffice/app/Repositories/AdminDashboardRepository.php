<?php

namespace App\Repositories;

use App\Models\job_application;
use App\Models\job_vacancy;
use App\Models\User;
use App\Repositories\Interfaces\DashboardRepositoryInterface;

class AdminDashboardRepository implements DashboardRepositoryInterface
{
    public function countJobSeekers(): int
    {
        return User::where('role', 'job-seeker')->count();
    }

    public function countActiveJobs(): int
    {
        return job_vacancy::whereNull('deleted_at')->count();
    }

    public function countApplications(): int
    {
        return job_application::whereNull('deleted_at')->count();
    }

    public function getMostAppliedJobs(int $limit = 5)
    {
        return job_vacancy::withCount('job_application as totalCount')
            ->with('company')
            ->orderByDesc('totalCount')
            ->limit($limit)
            ->get();
    }

    public function getJobsWithConversionData(int $limit = 5)
    {
        return job_vacancy::withCount('job_application as totalCount')
            ->orderByDesc('totalCount')
            ->limit($limit)
            ->get();
    }
}
