<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewCenter;
use App\Nova\Metrics\NewClient;
use App\Nova\Metrics\NewRevenue;
use App\Nova\Metrics\NewUser;
use App\Nova\Metrics\NewVehicle;
use App\Nova\Report;
use App\Nova\User;
use App\Nova\Vehicle;
use Laravel\Nova\Dashboard;

class UserInsights extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new NewUser(),
            new NewVehicle(),
            new NewCenter(),
            new NewClient(),
//            new NewRevenue(),
        ];
    }

    /**
     * Get the URI key for the dashboard.
     *
     * @return string
     */
    public function uriKey()
    {
        return 'user-insights';
    }
    public function name()
    {
        return 'Dashboard';
    }
}
