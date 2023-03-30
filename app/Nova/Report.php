<?php

namespace App\Nova;

use App\Nova\Metrics\NewReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Report extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Report>
     */
    public static $model = \App\Models\Report::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [
            ID::make()->sortable(),
            Markdown::make('Description','description')->showOnCreating(),
<<<<<<< HEAD
            BelongsTo::make('Inspection','inspections',Inspection::class)
                ->displayUsing(function ($name) {
=======
//            BelongsTo::make('Vehicle','vehicle',Vehicle::class),
            BelongsTo::make('Inspection','inspections',Inspection::class) ->displayUsing(function ($name) {
>>>>>>> a412f95966f6da6ea5d7b637fc32cf19ced768c0

                    $jsonUserData=$name
                        ->join('vehicles', 'vehicles.id', '=', 'inspections.vehicle_id')
                        ->where('inspections.id', '=', $name->id)
//                   ->where('vehicles.client_id', '=', $name->id)
                        ->select('vehicles.brand', 'inspections.name')
                        ->get()
                        ->pluck('brand', 'name')
                    ;
                    $userData = json_decode($jsonUserData, true);
                    return array_map(function($item) {
                        return (array)$item;
                    }, $userData);
                }),

            BelongsTo::make('Technical','technical',Inspection::class)
                ->displayUsing(function ($name) {

                    return $name
                        ->join('users', 'users.id', '=', 'inspections.user_id')
                        ->where('inspections.id', '=', $name->id)
//                   ->where('users.client_id', '=', $name->id)
                        ->select('users.name')
                        ->get()
                        ->pluck('name');

                }),
            BelongsTo::make('Center ','center_inspection',Inspection::class)
                ->displayUsing(function ($name) {

                    return $name
                        ->join('centers', 'centers.id', '=', 'inspections.center_id')
                        ->where('inspections.id', '=', $name->id)
//                   ->where('users.client_id', '=', $name->id)
                        ->select('centers.name')
                        ->get()
                        ->pluck('name');

                }),

            BelongsTo::make('SparePart','SpareParts',SparePart::class),
            Text::make('Count SparePart ','count'),
            BelongsToMany::make('Service','Services',Service::class),
<<<<<<< HEAD
=======
//            Text::make('User','user_id')->displayUsing(function ($name){
//                return $name->join('user_report', 'user_report.report_id', '=', 'reports.id')
//                    ->where('reports.id', '=', $name->id)
//                    ->where('reports.Users', '=', $name->user_id)
//
////                   ->where('vehicles.client_id', '=', $name->id)
//                    ->select('user_report.user_id')
//
//                    ->get();
//            }),


            BelongsTo::make('User','Users',User::class),
>>>>>>> a412f95966f6da6ea5d7b637fc32cf19ced768c0

//            BelongsTo::make('User','technical',User::class),
            HasOne::make('Bill','Bill',Bill::class),
        ];
    }


    /**
     * Get the cards available for the request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function cards(NovaRequest $request)
    {
        return [new NewReport()];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function lenses(NovaRequest $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function actions(NovaRequest $request)
    {
        return [];
    }
//    public static function authorizedToCreate(Request $request): bool
//    {
//        return false;
//    }
}
