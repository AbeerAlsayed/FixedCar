<?php

namespace App\Providers;

use App\Nova\Bill;
use App\Nova\Center;
use App\Nova\Client;
use App\Nova\Dashboards\Main;
use App\Nova\Dashboards\UserInsights;
use App\Nova\Inspection;
use App\Nova\Permission;
use App\Nova\Report;
use App\Nova\Role;
use App\Nova\Service;
use App\Nova\User;
use App\Nova\Vehicle;
use App\Nova\Warehouse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;
use PharIo\Manifest\License;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
        Nova::initialPath('/resources/users');
        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                MenuSection::make('Vehicles', [
                    MenuItem::resource(Client::class),
                    MenuItem::resource(Vehicle::class),
                    MenuItem::resource(Inspection::class),
                ])->icon('pencil-alt')->collapsable(),
                MenuSection::make('Document', [
                    MenuItem::resource(Report::class),
                    MenuItem::resource(Bill::class),
                ])->icon('clipboard-list')->collapsable(),
                MenuSection::make('Role & Permission', [
                    MenuItem::resource(Role::class),
                    MenuItem::resource(Permission::class),
                ])->icon('key')->collapsable(),
                MenuSection::make('setting', [
                    MenuItem::resource(User::class),
                    MenuItem::resource(Center::class),
                    MenuItem::resource(Service::class),
                    MenuItem::resource(Warehouse::class),
                ])->icon('cog')->collapsable(),

            ];
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
            new UserInsights(),
//            UserInsights::make(),
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
