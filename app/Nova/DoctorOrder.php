<?php

namespace App\Nova;

use App\Models\Branch;
use App\Models\CentreOfExcellence;
use App\Models\Doctor;
use App\Models\Speciality;
use App\Nova\Doctor as NovaDoctor;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\FormData;
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
        'id', 'doctor.name'
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

            BelongsTo::make('Doctor', 'doctor')
                ->withoutTrashed()
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            Select::make('Doctor', 'doctor_id')->options(function () {
                $doctors = Doctor::where('status', 'active')->get(['id', 'name']);
                $doctor_pair = [];

                foreach ($doctors as $doctor) {
                    $doctor_pair[$doctor->id] = $doctor->name;
                }

                return $doctor_pair;
            })
                ->hideFromIndex()
                ->hideFromDetail(),

            BelongsTo::make('Branch', 'branch')
                ->withoutTrashed()
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            // Select::make('Branch', 'branch_id')->options(function () {
            //     $branches = Branch::where('status', 'active')->get(['id', 'name']);
            //     $branch_pair = [];

            //     foreach ($branches as $branch) {
            //         $branch_pair[$branch->id] = $branch->name;
            //     }

            //     return $branch_pair;
            // }),

            Select::make('Branch', 'branch_id')
                ->dependsOn('doctor_id', function (Select $field, NovaRequest $request, FormData $formData) {
                    $doctor_id = (int) $formData->resource(NovaDoctor::uriKey(), $formData->doctor_id);
                    $branch_ids = DB::table('branch_doctor')->where('doctor_id', $doctor_id)->pluck('branch_id');
                    $branches = Branch::whereIn('id', $branch_ids)->where('status', 'active')->get(['id', 'name']);
                    $branch_pair = [];

                    foreach ($branches as $branch) {
                        $branch_pair[$branch->id] = $branch->name;
                    }

                    $field->options($branch_pair);
                })
                ->hideFromIndex()
                ->hideFromDetail(),

            BelongsTo::make('Centre of Excellence', 'coe')
                ->withoutTrashed()
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            // Select::make('Centre of Excellence', 'coe_id')->options(function () {
            //     $coes = CentreOfExcellence::where('status', 'active')->get(['id', 'name']);
            //     $coe_pair = [];

            //     foreach ($coes as $coe) {
            //         $coe_pair[$coe->id] = $coe->name;
            //     }

            //     return $coe_pair;
            // }),

            Select::make('Centre of Excellence', 'coe_id')
                ->dependsOn('doctor_id', function (Select $field, NovaRequest $request, FormData $formData) {
                    $doctor_id = (int) $formData->resource(NovaDoctor::uriKey(), $formData->doctor_id);
                    $coe_ids = DB::table('coe_doctor')->where('doctor_id', $doctor_id)->pluck('coe_id');
                    $coes = CentreOfExcellence::whereIn('id', $coe_ids)->where('status', 'active')->get(['id', 'name']);
                    $coe_pair = [];

                    foreach ($coes as $coe) {
                        $coe_pair[$coe->id] = $coe->name;
                    }

                    $field->options($coe_pair);
                })
                ->hideFromIndex()
                ->hideFromDetail(),

            BelongsTo::make('Speciality', 'speciality')
                ->withoutTrashed()
                ->hideWhenCreating()
                ->hideWhenUpdating(),

            // Select::make('Speciality', 'speciality_id')->options(function () {
            //     $specialities = Speciality::where('status', 'active')->get(['id', 'name']);
            //     $spciality_pair = [];

            //     foreach ($specialities as $spciality) {
            //         $spciality_pair[$spciality->id] = $spciality->name;
            //     }

            //     return $spciality_pair;
            // }),

            Select::make('Speciality', 'speciality_id')
                ->dependsOn('doctor_id', function (Select $field, NovaRequest $request, FormData $formData) {
                    $doctor_id = (int) $formData->resource(NovaDoctor::uriKey(), $formData->doctor_id);
                    $speciality_ids = DB::table('doctor_speciality')->where('doctor_id', $doctor_id)->pluck('speciality_id');
                    $specialities = Speciality::whereIn('id', $speciality_ids)->where('status', 'active')->get(['id', 'name']);
                    $speciality_pair = [];

                    foreach ($specialities as $speciality) {
                        $speciality_pair[$speciality->id] = $speciality->name;
                    }

                    $field->options($speciality_pair);
                })
                ->hideFromIndex()
                ->hideFromDetail(),

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

    public static function afterCreate(NovaRequest $request, Model $model)
    {
        $data = DB::table('action_events')->where('actionable_type', 'App\Models\DoctorOrder')->where('actionable_id', $model->id)->latest('updated_at')->first();
        $data = json_decode($data->original);

        if (isset($data->order_number)) {
            $order_number = $data->order_number;

            if ($order_number < $model->order_number) {
                $doctor_orders = DB::table('doctor_orders')->whereNot('id', $model->id)->where('branch_id', $request->input('branch_id'))->where('speciality_id', $request->input('speciality_id'))->whereBetween('order_number', [$order_number + 1, $model->order_number])->get();

                foreach ($doctor_orders as $doctor_order) {
                    DB::table('doctor_orders')->where('id', $doctor_order->id)->update([
                        'order_number' => $doctor_order->order_number - 1
                    ]);
                }
            } else {
                $doctor_orders = DB::table('doctor_orders')->whereNot('id', $model->id)->where('branch_id', $request->input('branch_id'))->where('speciality_id', $request->input('speciality_id'))->whereBetween('order_number', [$model->order_number, $order_number - 1])->get();

                foreach ($doctor_orders as $doctor_order) {
                    DB::table('doctor_orders')->where('id', $doctor_order->id)->update([
                        'order_number' => $doctor_order->order_number + 1
                    ]);
                }
            }
        }
    }

    public static function afterUpdate(NovaRequest $request, Model $model)
    {
        $data = DB::table('action_events')->where('actionable_type', 'App\Models\DoctorOrder')->where('actionable_id', $model->id)->latest('updated_at')->first();
        $data = json_decode($data->original);

        if (isset($data->order_number)) {
            $order_number = $data->order_number;

            if ($order_number < $model->order_number) {
                $doctor_orders = DB::table('doctor_orders')->whereNot('id', $model->id)->where('branch_id', $request->input('branch_id'))->where('speciality_id', $request->input('speciality_id'))->whereBetween('order_number', [$order_number + 1, $model->order_number])->get();

                foreach ($doctor_orders as $doctor_order) {
                    DB::table('doctor_orders')->where('id', $doctor_order->id)->update([
                        'order_number' => $doctor_order->order_number - 1
                    ]);
                }
            } else {
                $doctor_orders = DB::table('doctor_orders')->whereNot('id', $model->id)->where('branch_id', $request->input('branch_id'))->where('speciality_id', $request->input('speciality_id'))->whereBetween('order_number', [$model->order_number, $order_number - 1])->get();

                foreach ($doctor_orders as $doctor_order) {
                    DB::table('doctor_orders')->where('id', $doctor_order->id)->update([
                        'order_number' => $doctor_order->order_number + 1
                    ]);
                }
            }
        }
    }
}
