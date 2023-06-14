<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;
use Laravel\Nova\Panel;

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

            new Panel('Icon', $this->icon()),
            new Panel('Banner', $this->banner()),
            new Panel('Description', $this->description()),
            new Panel('Our Doctors', $this->our_doctors()),
            new Panel('Services and Treatments', $this->services_treatments()),
            new Panel('Our Locations', $this->our_locations()),
            new Panel('Reviews', $this->reviews()),
            new Panel('Blogs', $this->blogs()),
            new Panel('Media', $this->media()),
            new Panel('SEO', $this->seo()),

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
        ];
    }

    protected function icon()
    {
        return [
            Text::make('Image', 'icon_image')
                ->hideFromIndex()
                ->rules('nullable', 'string'),
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
                ->updateRules('nullable'),

            Text::make('Text', 'banner_text')
                ->hideFromIndex()
                ->rules('required', 'string', 'max:255'),
        ];
    }

    protected function description()
    {
        return [
            Trix::make('Description', 'description')
                ->hideFromIndex()
                ->rules('required', 'string'),

            Image::make('Image', 'description_image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),
        ];
    }

    protected function our_doctors()
    {
        return [
            Text::make('Text', 'our_doctors_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function services_treatments()
    {
        return [
            Image::make('Image1', 'services_treatments_image1')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024')
                ->prunable(),

            Image::make('Image2', 'services_treatments_image2')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024')
                ->prunable(),

            Trix::make('Description', 'services_treatments')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function our_locations()
    {
        return [
            Text::make('Text', 'our_locations_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function reviews()
    {
        return [
            Text::make('Text', 'reviews_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function blogs()
    {
        return [
            Text::make('Text', 'blogs_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function media()
    {
        return [
            Text::make('Text', 'media_text')
                ->hideFromIndex()
                ->rules('required', 'string'),
        ];
    }

    protected function seo()
    {
        return [
            Text::make('Icon Image Alt', 'icon_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Banner Alt', 'banner_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

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
        return [
            new Actions\DoctorSync
        ];
    }

    public static function redirectAfterCreate(NovaRequest $request, $resource)
    {
        return '/resources/specialities/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/specialities/';
    }

    // public static function indexQuery(NovaRequest $request, $query)
    // {
    //     if (DB::table('role_user')->where('user_id', $request->user()->id)->where('role_id', 2)->exists()) {
    //         $branch_id = $request->user()->branch_id;

    //         $speciality_ids = DB::table('branch_speciality')->where('branch_id', $branch_id)->pluck('speciality_id')->toArray();

    //         return $query->whereIn('id', $speciality_ids);
    //     }

    //     return $query;
    // }
}
