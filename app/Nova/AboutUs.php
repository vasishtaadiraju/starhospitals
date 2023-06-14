<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class AboutUs extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\AboutUs>
     */
    public static $model = \App\Models\AboutUs::class;

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

            new Panel('Banner', $this->banner()),
            new Panel('Vision', $this->vmc('vision')),
            new Panel('Mission', $this->vmc('mission')),
            new Panel('Chairman\'s Desk', $this->vmc('chairman_desk')),
            new Panel('About', $this->about()),
            new Panel('Our Locations', $this->text('our_locations')),
            new Panel('Photo Gallery', $this->text('photo_gallery')),
            new Panel('FAQ', $this->text('faq'))
        ];
    }

    protected function banner()
    {
        return [
            Image::make('Desktop image', 'banner_desktop')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),

            Image::make('Mobile image', 'banner_mobile')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Alt', 'banner_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Text::make('Text', 'banner_text')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:50')
        ];
    }

    public function vmc($key)
    {
        return [
            Textarea::make('Description', $key)
                ->hideFromIndex()
                ->rules('required', 'string')
        ];
    }

    public function about()
    {
        return [
            Image::make('Thumbnail', 'video_thumbnail')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),

            URL::make('Link', 'video_link')
                ->hideFromIndex()
                ->rules('required', 'url'),

            Text::make('Title', 'title')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:50'),

            Textarea::make('Description', 'description')
                ->hideFromIndex()
                ->rules('required', 'string')
        ];
    }

    public function text($key)
    {
        return [
            Textarea::make('Text', $key . '_text')
                ->rows(2)
                ->hideFromIndex()
                ->rules('required', 'string')
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
        return '/resources/about-uses/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/about-uses/';
    }

    public static function label()
    {
        return 'About Us ';
    }
}
