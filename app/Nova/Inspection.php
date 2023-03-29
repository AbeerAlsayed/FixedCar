<?php

namespace App\Nova;

use App\Nova\Filters\CenterName;
use App\Nova\Filters\InspectionState;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Heading;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

//use App\Models\Client;
class Inspection extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Inspection>
     */
    public static $model = \App\Models\Inspection::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];
//    private mixed $name;

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
//            Text::make('Name')->showOnIndex(function () {
//                return $this->name === 'Car engine repair';
//            }),


            Select::make('name services','name')
                ->options(function (){
//
                    return \App\Models\Service::whereHas('Centers', function($q){
//                    $q->where('name');
                    })->pluck('type','type');
                })->searchable(),

            Select::make('Status' , 'status')->options([
                'Pending' => 'Pending',
                'Process' => 'Process',
                'Finished' => 'Finished',

            ])->default('Pending')
                ->required()->searchable(),
//                ->resolveUsing(function ($value, $resource, $attribute) {
//                // $value = model attribute value
//                // $attribute = 'my_custom_name'
//                return 'Process';
//            }),
//            Heading::make('<p class="text-danger">* All fields are required.</p>')->asHtml(),
            Markdown::make('Description','description'),
//            new Panel('Client',$this->visibilityFields()),
            BelongsTo::make('Vehicles','vehicle',Vehicle::class) ->displayUsing(function ($name) {

                           $jsonUserData=$name
                               ->join('clients', 'clients.id', '=', 'vehicles.client_id')
                               ->where('vehicles.id', '=', $name->id)
//                               ->where('vehicles.client_id', '=', $name->id)
                               ->select('clients.phone_number', 'vehicles.brand')
                               ->get()
                               ->pluck('phone_number', 'brand')
                           ;
                           $userData = json_decode($jsonUserData, true);
                           return array_map(function($item) {
                               return (array)$item;
                           }, $userData);
                       }),

            Select::make('Technical','user_id')
                ->options(function (){
                return \App\Models\User::whereHas('Roles', function($q){
                    $q->where('name', 'Technical');
                })->pluck('name','id');
            })->onlyOnForms(),
//            new Panel('Center',new visibilityFields()),
            BelongsTo::make('Center','Center',Center::class),
            HasOne::make('Reports' ,'Reports' ,Report::class),
            HasOne::make('Bill' ,'Bill',Bill::class),
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
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function filters(NovaRequest $request)
    {
        return [
            new InspectionState(),new CenterName(),
        ];
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
    public static function authorizedToCreate(Request $request): bool
    {
        return true;
    }
}
