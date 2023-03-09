<?php

namespace App\Nova\Dashboards;

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
            User::make(),
//            Report::make(),
//            Vehicle::make(),
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
        return 'User Insights';
    }
}
