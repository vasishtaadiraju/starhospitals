<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class FAQ extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\FAQ>
     */
    public static $model = \App\Models\FAQ::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'question';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'question'
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

            Text::make('Question', 'question')
                ->rules('required', 'string'),

            Trix::make('Answer', 'answer')
                ->hideFromIndex()
                ->rules('required', 'string'),

            Boolean::make('Show in About page', 'aboutpage')
                ->trueValue('yes')
                ->falseValue('no')
                ->hideFromIndex(),

            Number::make('About page Order Number', 'aboutpage_order_number')
                ->min(1)
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Boolean::make('Show in Contact page', 'contactpage')
                ->trueValue('yes')
                ->falseValue('no')
                ->hideFromIndex(),

            Number::make('Contact page Order Number', 'contactpage_order_number')
                ->min(1)
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            BelongsToMany::make('Region', 'regions')
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

            BelongsToMany::make('User', 'users')
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
        return '/resources/f-a-qs/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/f-a-qs/';
    }

    public static function label()
    {
        return 'FAQ';
    }
}
