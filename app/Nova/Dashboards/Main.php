<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewCenter;
use App\Nova\Metrics\NewClient;
use App\Nova\Metrics\NewReport;
use App\Nova\Metrics\NewRevenue;
use App\Nova\Metrics\newrole;
use App\Nova\Metrics\NewUser;
use App\Nova\Metrics\NewVehicle;
use App\Nova\Metrics\UsersPerDay;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;
use Laravel\Nova\Http\Requests\NovaRequest;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [new NewUser(),
//            new NewUser(),
            new NewVehicle(),
            new NewCenter(),
            new NewClient(),
//            new NewRevenue(),
        new UsersPerDay()
            ];
    }

}
