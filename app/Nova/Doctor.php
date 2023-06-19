<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class Doctor extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Doctor>
     */
    public static $model = \App\Models\Doctor::class;

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
                ->rules('required', 'string', 'max:100'),

            Number::make('HIS ID', 'his_id')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Image::make('Small Image', 'small_image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Small Image Alt', 'small_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Large Image', 'large_image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Large Image Alt', 'large_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Text::make('Designation', 'designation')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Trix::make('Qualification', 'qualification')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Experience', 'experience')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:5'),

            Trix::make('Experience Description', 'experience_description')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Number::make('Fee', 'fee')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Trix::make('Expertise', 'expertise')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Trix::make('Research & Publications', 'research_publications')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Trix::make('Awards, Certifications & Memberships', 'certifications_memberships')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Number::make('Order Number', 'order_number')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Text::make('Blogs Text', 'blogs_text')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Text::make('Media Text', 'media_text')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Boolean::make('Available for Video Consultation', 'video_consultation')
                ->trueValue('yes')
                ->falseValue('no')
                ->filterable(),

            Text::make('Slug', 'slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255')
                ->creationRules('unique:doctors,slug')
                ->updateRules('unique:doctors,slug,{{resourceId}}'),

            Text::make('Meta Title', 'meta_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Textarea::make('Meta Description', 'meta_description')
                ->rows(3)
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            URL::make('Canonical', 'canonical')
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

            Text::make('Schema Opening Hours', 'schema_openingHours')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Address Locality', 'schema_addressLocality')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Region', 'schema_addressRegion')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Postal Code', 'schema_postalCode')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Street Address', 'schema_streetAddress')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Schema Telephone', 'schema_telephone')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Boolean::make('Status', 'status')
                ->trueValue('active')
                ->falseValue('inactive')
                ->filterable(),

            // Select::make('Branch', 'branch_id')
            //     ->options(function () {

            //         $branch_select = [];
            //         $branches = Branch::get(['id', 'name']);

            //         foreach ($branches as $branch) {
            //             $branch_select[$branch->id] = $branch->name;
            //         }

            //         return $branch_select;
            //     })
            //     ->displayUsingLabels()
            //     ->help('Please select the branch, only if this user is a branch admin.')
            //     ->hideFromIndex(),

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
        return [
            Actions\DataSync::make()->showInline()
        ];
    }

    public static function redirectAfterCreate(NovaRequest $request, $resource)
    {
        return '/resources/doctors/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/doctors/';
    }
}
