<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Blog extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Blog>
     */
    public static $model = \App\Models\Blog::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id', 'title'
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

            Text::make('Title', 'title')
                ->rules('required', 'string', 'max:150'),

            Text::make('Author', 'author')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:50'),

            Text::make('Designation', 'designation')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:50'),

            Textarea::make('Address', 'address')
                ->rows(3)
                ->hideFromIndex()
                ->rules('required', 'string'),

            Image::make('Image', 'image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable'),

            Text::make('Image Alt', 'image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Trix::make('Description', 'description')
                ->hideFromIndex()
                ->rules('required', 'string'),

            Image::make('Banner Desktop', 'banner_desktop')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable'),

            Text::make('Banner Desktop Alt', 'banner_desktop_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Banner Mobile', 'banner_mobile')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable'),

            Text::make('Banner Mobile Alt', 'banner_mobile_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Date::make('Published date', 'published_date')
                ->hideFromIndex()
                ->rules('required', 'date'),

            Text::make('Slug', 'slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Text::make('Meta Title', 'meta_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Textarea::make('Meta Description', 'meta_description')
                ->rows(3)
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Boolean::make('Show in Homepage', 'homepage')
                ->trueValue('yes')
                ->falseValue('no')
                ->hideFromIndex(),

            Number::make('Homepage Order Number', 'homepage_order_number')
                ->min(1)
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Boolean::make('Status', 'status')
                ->trueValue('active')
                ->falseValue('inactive'),

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
        return '/resources/blogs/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/blogs/';
    }
}
