<?php

namespace App\Repositories;

use App\Models\job_application;
use App\Models\job_vacancy;
use App\Models\User;
use App\Repositories\Interfaces\DashboardRepositoryInterface;
use Illuminate\Support\Collection;

class CompanyDashboardRepository implements DashboardRepositoryInterface
{
    private Collection $companyJobIds;

    public function setCompanyJobIds(Collection $jobIds): self
    {
        $this->companyJobIds = $jobIds;
        return $this;
    }

    public function countJobSeekers(): int
    {
        return User::where('role', 'job-seeker')
            ->whereHas('job_application', function ($query) {
                $query->whereIn('jobVacancyID', $this->companyJobIds);
            })
            ->count();
    }

    public function countActiveJobs(): int
    {
        return $this->companyJobIds->count();
    }

    public function countApplications(): int
    {
        return job_application::whereIn('jobVacancyId', $this->companyJobIds)->count();
    }

    public function getMostAppliedJobs(int $limit = 5)
    {
        return job_vacancy::withCount('job_application as totalCount')
            ->with('company')
            ->whereIn('id', $this->companyJobIds)
            ->orderByDesc('totalCount')
            ->limit($limit)
            ->get();
    }

    public function getJobsWithConversionData(int $limit = 5)
    {
        return job_vacancy::withCount('job_application as totalCount')
            ->whereIn('id', $this->companyJobIds)
            ->having('totalCount', '>', 0)
            ->orderByDesc('totalCount')
            ->limit($limit)
            ->get();
    }
}
