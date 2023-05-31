<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\FormData;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
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
                ->sortable()
                ->rules('required', 'string', 'max:100'),

            Select::make('Type', 'type')->options([
                'image' => 'Image',
                'video' => 'Video'
            ]),

            Image::make('Image', 'image')
                ->disk('public')
                ->hideFromIndex()
                ->hide()
                ->dependsOn(
                    ['type'],
                    function (Image $field, NovaRequest $request, FormData $formData) {
                        if ($formData->type === 'image') {
                            $field->show()->rules('required', 'image', 'max:1024');
                        }
                    }
                ),

            Text::make('Image Alt', 'image_alt')
                ->hideFromIndex()
                ->hide()
                ->dependsOn(
                    ['type'],
                    function (Text $field, NovaRequest $request, FormData $formData) {
                        if ($formData->type === 'image') {
                            $field->show()->rules('required', 'string', 'max:100');
                        }
                    }
                ),

            Image::make('Thumbnail', 'thumbnail')
                ->disk('public')
                ->hideFromIndex()
                ->hide()
                ->dependsOn(
                    ['type'],
                    function (Image $field, NovaRequest $request, FormData $formData) {
                        if ($formData->type === 'video') {
                            $field->show()->rules('required', 'image', 'max:1024');
                        }
                    }
                ),

            URL::make('Video Link', 'video_link')
                ->hideFromIndex()
                ->hide()
                ->dependsOn(
                    ['type'],
                    function (URL $field, NovaRequest $request, FormData $formData) {
                        if ($formData->type === 'video') {
                            $field->show()->rules('required', 'active_url', 'max:100');
                        }
                    }
                ),

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

            BelongsToMany::make('Users', 'users')
                ->searchable()
                ->fields(function () {
                    return [
                        Number::make('Order Number', 'order_number')
                    ];
                }),

            BelongsToMany::make('Region', 'regions')
                ->searchable()
                ->fields(function () {
                    return [
                        Number::make('Order Number', 'order_number')
                    ];
                }),

            BelongsToMany::make('Branch', 'branch')
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
        return '/resources/testimonials/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/testimonials/';
    }
}
