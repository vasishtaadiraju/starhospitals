<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Speciality extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Speciality>
     */
    public static $model = \App\Models\Speciality::class;

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
            ID::make()->sortable(),

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'string', 'max:50'),

            Avatar::make('Icon Image', 'icon_image')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Icon Image Alt', 'icon_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Banner Desktop', 'banner_desktop')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Banner Desktop Alt', 'banner_desktop_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Banner Mobile', 'banner_mobile')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Banner Mobile Alt', 'banner_mobile_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Trix::make('Description', 'description')
                ->withFiles('public')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Image::make('Description Image', 'description_image')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Description Image Alt', 'description_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Text::make('Slug', 'slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50'),

            Text::make('Meta Title', 'meta_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Textarea::make('Meta Description', 'meta_description')
                ->rows(3)
                ->hideFromIndex()
                ->rules('nullable', 'string'),

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

            BelongsToMany::make('User', 'users')
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
}
