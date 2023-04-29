<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Region extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Region>
     */
    public static $model = \App\Models\Region::class;

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
        'id', 'name'
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
            ID::make()
                ->sortable(),

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'string', 'max:50'),

            Text::make('Short Description', 'short_description')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Trix::make('Long Description', 'long_description')
                ->withFiles('public')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Avatar::make('Icon Image', 'icon_image')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Icon Image Alt', 'icon_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Image', 'image')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Image Alt', 'image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Number::make('Latitude', 'latitude')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Number::make('Longitude', 'longitude')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Text::make('Slug', 'slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50'),

            Text::make('Meta Title', 'meta_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Textarea::make('Meta Description', 'meta_description')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Number::make('Order Number', 'order_number')
                ->hideFromIndex()
                ->rules('nullable', 'integer'),

            Text::make('Schema Headline', 'schema_headline')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Name', 'schema_name')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Description', 'schema_description')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Image', 'schema_image')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Keywords', 'schema_keywords')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Boolean::make('Status', 'status')
                ->trueValue('active')
                ->falseValue('inactive'),

            HasMany::make('Branch'),

            BelongsToMany::make('User', 'users')
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
        return '/resources/regions/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/regions/';
    }
}
