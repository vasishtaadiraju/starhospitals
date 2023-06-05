<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Career extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Career>
     */
    public static $model = \App\Models\Career::class;

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
            new Panel('Why Star', $this->whyStar()),
            new Panel('Why Star Card 1', $this->whyStarCard(1)),
            new Panel('Why Star Card 2', $this->whyStarCard(2)),
            new Panel('Why Star Card 3', $this->whyStarCard(3)),
            new Panel('Why Star Card 4', $this->whyStarCard(4)),
            new Panel('Workforce', $this->workforce()),
            new Panel('FAQ', $this->faq()),
        ];
    }

    protected function banner()
    {
        return [
            Image::make('Desktop', 'banner_desktop')
                ->disk('public')
                ->hideFromIndex()
                ->rules('required', 'image', 'max:1024'),

            Image::make('Mobile', 'banner_mobile')
                ->disk('public')
                ->hideFromIndex()
                ->rules('required', 'image', 'max:1024'),

            Text::make('Alt', 'banner_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Text::make('Text', 'banner_text')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:50'),
        ];
    }

    protected function whyStar()
    {
        return [
            Text::make('Text', 'why_star_text')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:255'),

            Image::make('Image', 'why_star_image')
                ->disk('public')
                ->hideFromIndex()
                ->rules('required', 'image', 'max:1024'),

            Text::make('Alt', 'why_star_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),
        ];
    }

    protected function whyStarCard($number)
    {
        return [
            Text::make('Icon', 'why_star_card' . $number . '_icon')
                ->hideFromIndex()
                ->rules('required', 'string'),

            Text::make('Title', 'why_star_card' . $number . '_title')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:50'),

            Text::make('Description', 'why_star_card' . $number . '_description')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:100')
        ];
    }

    protected function workforce()
    {
        return [
            Text::make('Text', 'workforce_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function faq()
    {
        return [
            Text::make('Text', 'faq_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
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
        return '/resources/careers/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/careers/';
    }
}
