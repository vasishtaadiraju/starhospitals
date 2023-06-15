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

class Homepage extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Homepage>
     */
    public static $model = \App\Models\Homepage::class;

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
        'id'
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
            new Panel('First banner', $this->banner(1)),
            new Panel('Second banner', $this->banner(2)),
            new Panel('Third banner', $this->banner(3)),
            new Panel('Fourth banner', $this->banner(4)),
            new Panel('Meet our Specialist', $this->meetSpecialist()),
            new Panel('Why Choose Us', $this->whyChooseUs()),
            new Panel('Why Choose Us - First Card', $this->whyChooseUsCard(1)),
            new Panel('Why Choose Us - Second Card', $this->whyChooseUsCard(2)),
            new Panel('Why Choose Us - Third Card', $this->whyChooseUsCard(3)),
            new Panel('Why Choose Us - Fourth Card', $this->whyChooseUsCard(4)),
            new Panel('About Us', $this->aboutUs()),
            new Panel('Reviews', $this->text('review')),
            new Panel('Blogs', $this->text('blog')),
            new Panel('Media', $this->text('media')),
            new Panel('Contact', $this->text('contact'))
        ];
    }

    protected function banner($number)
    {
        return [
            Image::make('Desktop image', 'banner' . $number . '_desktop')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024')
                ->prunable(),

            Image::make('Mobile image', 'banner' . $number . '_mobile')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024')
                ->prunable(),

            Text::make('Alt', 'banner' . $number . '_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Text::make('Title', 'banner' . $number . '_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50'),

            Text::make('Description', 'banner' . $number . '_description')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:130'),

            URL::make('CTA', 'banner' . $number . '_cta')
                ->hideFromIndex()
                ->rules('nullable', 'url')
        ];
    }

    public function meetSpecialist()
    {
        return [
            Text::make('Text', 'meet_our_specialist_text')
                ->hideFromIndex()
                ->rules('nullable', 'string')
        ];
    }

    public function whyChooseUs()
    {
        return [
            Image::make('Image', 'why_choose_us_image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable'),

            Text::make('Alt', 'why_choose_us_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100')
        ];
    }

    public function whyChooseUsCard($number)
    {
        return [
            Text::make('Icon', 'choose' . $number . '_icon')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Title', 'choose' . $number . '_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50'),

            Text::make('Description', 'choose' . $number . '_description')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:120')
        ];
    }

    public function aboutUs()
    {
        return [
            Image::make('Thumbnail', 'about_thumbnail')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable'),

            URL::make('Video link', 'about_video_link')
                ->hideFromIndex()
                ->rules('nullable', 'url'),

            Textarea::make('Description', 'about_description')
                ->rows(4)
                ->hideFromIndex()
                ->rules('nullable', 'string')
        ];
    }

    public function text($key)
    {
        return [
            Textarea::make('Text', $key . '_text')
                ->rows(2)
                ->hideFromIndex()
                ->rules('nullable', 'string')
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
        return '/resources/homepages/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/homepages/';
    }

    public static function label()
    {
        return 'Homepage';
    }
}
