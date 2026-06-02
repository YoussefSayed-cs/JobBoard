<?php

namespace App\Repositories\Interfaces;

interface DashboardRepositoryInterface
{
    public function countJobSeekers(): int;
    public function countActiveJobs(): int;
    public function countApplications(): int;
    public function getMostAppliedJobs(int $limit = 5);
    public function getJobsWithConversionData(int $limit = 5);
}
