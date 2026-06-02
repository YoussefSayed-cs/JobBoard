<?php

namespace App\Providers;

use App\Repositories\AdminDashboardRepository;
use App\Repositories\CompanyDashboardRepository;
use App\Repositories\Interfaces\DashboardRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        // $this->app->bind(
        //     \App\Repositories\Interfaces\DashboardRepositoryInterface::class,
        //     \App\Repositories\AdminDashboardRepository::class
        // );

        $this->app->bind(DashboardRepositoryInterface::class,
         function () {

            $user = Auth::user();

            if ($user->role === 'admin') {
                return new AdminDashboardRepository();
            }

            $company = $user->company;


            return (new CompanyDashboardRepository())
                ->setCompanyJobIds($company->jobVacancies->pluck('id'));
        });

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
