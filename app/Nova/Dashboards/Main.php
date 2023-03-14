<?php

namespace App\Nova\Dashboards;

use App\Nova\Metrics\NewReport;
use App\Nova\Metrics\newrole;
use App\Nova\Metrics\NewUser;
use App\Nova\Metrics\NewVehicle;
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
        return [new NewUser(),];
    }

}
