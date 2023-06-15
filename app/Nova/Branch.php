<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

class Branch extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Branch>
     */
    public static $model = \App\Models\Branch::class;

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
                ->rules('required', 'string', 'max:50'),

            new Panel('Card', $this->card()),
            new Panel('Banner', $this->banner()),
            new Panel('About', $this->about()),
            new Panel('Highlights', $this->highlights()),
            new Panel('Why Choose Us', $this->whyChooseUs()),
            new Panel('Why Choose Us - Card 1', $this->whyChooseUsCard(1)),
            new Panel('Why Choose Us - Card 2', $this->whyChooseUsCard(2)),
            new Panel('Why Choose Us - Card 3', $this->whyChooseUsCard(3)),
            new Panel('Why Choose Us - Card 4', $this->whyChooseUsCard(4)),
            new Panel('Reviews', $this->reviews()),
            new Panel('Blogs', $this->blogs()),
            new Panel('FAQ', $this->faq()),
            new Panel('SEO', $this->seo()),

            // BelongsTo::make('Region')
            //     ->withoutTrashed(),

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

    protected function card()
    {
        return [
            Image::make('Image', 'card_image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Textarea::make('Address', 'address')
                ->rows(4)
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Alt', 'card_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),
        ];
    }

    protected function banner()
    {
        return [
            Image::make('Desktop', 'banner_desktop')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Image::make('Mobile', 'banner_mobile')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Text', 'banner_text')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50'),

            Text::make('Alt', 'banner_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),
        ];
    }

    protected function about()
    {
        return [
            Trix::make('Description', 'about')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Image::make('Desktop Image', 'about_image_desktop')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Image::make('Mobile Image', 'about_image_mobile')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Image Alt', 'about_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),
        ];
    }

    protected function highlights()
    {
        return [
            Text::make('Years of experience', 'experience')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:5'),

            Text::make('Surgeries', 'surgeries')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:5'),

            Text::make('Beds', 'beds')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:5'),

            Text::make('Happy patients', 'happy_patients')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:5'),
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
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Image Alt', 'why_choose_us_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),
        ];
    }

    protected function whyChooseUsCard($card_number)
    {
        return [
            Text::make('Icon', 'why_choose_us_card' . $card_number . '_icon')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Title', 'why_choose_us_card' . $card_number . '_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50'),

            Textarea::make('Description', 'why_choose_us_card' . $card_number . '_description')
                ->rows(3)
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:120'),
        ];
    }

    protected function reviews()
    {
        return [
            Textarea::make('Text', 'reviews_text')
                ->rows(3)
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),
        ];
    }

    protected function blogs()
    {
        return [
            Textarea::make('Text', 'blogs_text')
                ->rows(3)
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),
        ];
    }

    protected function faq()
    {
        return [
            Textarea::make('Text', 'faq_text')
                ->rows(3)
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),
        ];
    }

    protected function seo()
    {
        return [
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

            Text::make('Schema Name', 'schema_name')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Description', 'schema_description')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Image', 'schema_image')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Opens', 'schema_opens')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Closes', 'schema_closes')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Telephone', 'schema_telephone')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Postal Code', 'schema_postalCode')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Latitude', 'schema_latitude')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Longitude', 'schema_longitude')
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

    public static function redirectAfterCreate(NovaRequest $request, $resource)
    {
        return '/resources/branches/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/branches/';
    }

    // public static function indexQuery(NovaRequest $request, $query)
    // {
    //     if (DB::table('role_user')->where('user_id', $request->user()->id)->where('role_id', 2)->exists()) {
    //         return $query->where('id', $request->user()->branch_id);
    //     }

    //     return $query;
    // }
}
