<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class InternationalPatient extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\InternationalPatient>
     */
    public static $model = \App\Models\InternationalPatient::class;

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
            new Panel('Key Highlight 1', $this->keyHighlight(1)),
            new Panel('Key Highlight 2', $this->keyHighlight(2)),
            new Panel('Key Highlight 3', $this->keyHighlight(3)),
            new Panel('Key Highlight 4', $this->keyHighlight(4)),
            new Panel('Virtual Tour', $this->virtualTour()),
            new Panel('Our Process', $this->ourProcess()),
            new Panel('Facilities', $this->facilities()),
            new Panel('Reviews', $this->reviews()),
            new Panel('Enquiry Form', $this->enquiryForm()),
            new Panel('FAQ', $this->faq()),
        ];
    }

    protected function banner()
    {
        return [
            Image::make('Desktop', 'banner_desktop')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),

            Image::make('Mobile', 'banner_mobile')
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
                ->rules('required', 'string', 'max:50'),
        ];
    }

    protected function keyHighlight($number)
    {
        return [
            Text::make('Icon', 'key_highlight' . $number . '_icon')
                ->hideFromIndex()
                ->rules('required', 'string'),

            Text::make('Title', 'key_highlight' . $number . '_title')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:50'),

            Text::make('Description', 'key_highlight' . $number . '_description')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:150')
        ];
    }

    protected function virtualTour()
    {
        return [
            Text::make('Text', 'virtual_tour_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function ourProcess()
    {
        return [
            Textarea::make('Text', 'our_process_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function facilities()
    {
        return [
            Textarea::make('Text', 'facilities_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function reviews()
    {
        return [
            Textarea::make('Text', 'reviews_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function enquiryForm()
    {
        return [
            Textarea::make('Text', 'enquiry_form_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function faq()
    {
        return [
            Textarea::make('Text', 'faq_text')
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
        return '/resources/international-patients/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/international-patients/';
    }
}
