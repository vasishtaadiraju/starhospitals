<?php

namespace App\Nova;

use App\Models\Branch;
use App\Models\CentreOfExcellence;
use App\Models\Doctor;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class DoctorOrder extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\DoctorOrder>
     */
    public static $model = \App\Models\DoctorOrder::class;

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

            Select::make('Doctor', 'doctor_id')->options(function () {
                $doctors = Doctor::where('status', 'active')->get(['id', 'name']);
                $doctor_pair = [];

                foreach ($doctors as $doctor) {
                    $doctor_pair[$doctor->id] = $doctor->name;
                }

                return $doctor_pair;
            }),

            Select::make('Branch', 'branch_id')->options(function () {
                $branches = Branch::where('status', 'active')->get(['id', 'name']);
                $branch_pair = [];

                foreach ($branches as $branch) {
                    $branch_pair[$branch->id] = $branch->name;
                }

                return $branch_pair;
            }),

            Select::make('Centre of Excellence', 'coe_id')->options(function () {
                $coes = CentreOfExcellence::where('status', 'active')->get(['id', 'name']);
                $coe_pair = [];

                foreach ($coes as $coe) {
                    $coe_pair[$coe->id] = $coe->name;
                }

                return $coe_pair;
            }),

            Select::make('Speciality', 'speciality_id')->options(function () {
                $specialities = Speciality::where('status', 'active')->get(['id', 'name']);
                $spciality_pair = [];

                foreach ($specialities as $spciality) {
                    $spciality_pair[$spciality->id] = $spciality->name;
                }

                return $spciality_pair;
            }),

            Number::make('Order Number', 'order_number')
                ->min(1)
                ->hideFromIndex()
                ->rules('required', 'numeric', 'integer')
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

    public static function redirectAfterCreate(NovaRequest $request, $resource)
    {
        return '/resources/doctor-orders/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/doctor-orders/';
    }
}
