<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class Testimonial extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Testimonial>
     */
    public static $model = \App\Models\Testimonial::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'text';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'text'
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

            Text::make('Text', 'text')
                ->rules('required', 'string'),

            Text::make('Patient Name', 'patient_name')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:50'),

            Image::make('Image', 'image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Image Alt', 'image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            URL::make('Video Link', 'video_link')
                ->hideFromIndex()
                ->rules('nullable', 'url'),

            Boolean::make('Show in Homepage', 'homepage')
                ->trueValue('yes')
                ->falseValue('no')
                ->hideFromIndex(),

            Number::make('Homepage Order Number', 'homepage_order_number')
                ->min(1)
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Boolean::make('Show in International Page', 'internationalpage')
                ->trueValue('yes')
                ->falseValue('no')
                ->hideFromIndex(),

            Number::make('International Page Order Number', 'internationalpage_order_number')
                ->min(1)
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Boolean::make('Status', 'status')
                ->trueValue('active')
                ->falseValue('inactive')
                ->filterable(),

            BelongsToMany::make('Doctor', 'doctors')
                ->searchable()
                ->fields(function () {
                    return [
                        Number::make('Order Number', 'order_number')
                    ];
                }),

            BelongsToMany::make('Branch', 'branches')
                ->searchable()
                ->fields(function () {
                    return [
                        Number::make('Order Number', 'order_number')
                    ];
                }),

            BelongsToMany::make('Centre of Excellence', 'coes')
                ->searchable()
                ->fields(function () {
                    return [
                        Number::make('Order Number', 'order_number')
                    ];
                }),

            BelongsToMany::make('Speciality', 'specialities')
                ->searchable()
                ->fields(function () {
                    return [
                        Number::make('Order Number', 'order_number')
                    ];
                }),

            BelongsToMany::make('Specialist', 'specialists')
                ->searchable()
                ->fields(function () {
                    return [
                        Number::make('Order Number', 'order_number')
                    ];
                }),
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
        return '/resources/testimonials/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/testimonials/';
    }
}
