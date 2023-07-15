<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Specialist extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Specialist>
     */
    public static $model = \App\Models\Specialist::class;

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

            BelongsTo::make('Region', 'region')
                ->nullable()
                ->withoutTrashed(),

            BelongsTo::make('Branch', 'branch')
                ->withoutTrashed(),

            BelongsTo::make('Speciality', 'speciality')
                ->withoutTrashed(),

            new Panel('Banner', $this->banner()),
            new Panel('Our Specialist', $this->text('our_specialist')),
            new Panel('About', $this->about()),
            new Panel('Reviews', $this->text('reviews')),
            new Panel('From Our Doctors', $this->text('doctors')),
            new Panel('Media', $this->text('media')),
            new Panel('FAQ', $this->text('faq')),
            new Panel('Others', $this->others()),
        ];
    }

    protected function banner()
    {
        return [
            Image::make('Desktop Image', 'banner_desktop')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Image::make('Mobile Image', 'banner_mobile')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Alt', 'banner_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),
        ];
    }

    protected function about()
    {
        return [
            Text::make('Title', 'title')
                ->rules('nullable', 'string', 'max:255'),

            Textarea::make('Description', 'description')
                ->rows(4)
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Image::make('Image', 'description_image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Alt', 'description_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),
        ];
    }

    protected function text($column)
    {
        return [
            Text::make('Text', $column . '_text')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),
        ];
    }

    protected function others()
    {
        return [
            Text::make('Slug', 'slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100')
                ->creationRules('unique:specialists,slug')
                ->updateRules('unique:specialists,slug,{{resourceId}}'),

            Text::make('Meta Title', 'meta_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Textarea::make('Meta Description', 'meta_description')
                ->rows(3)
                ->hideFromIndex()
                ->rules('nullable', 'string'),
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
