<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Http\Requests\NovaRequest;

class Condition extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\Condition>
     */
    public static $model = \App\Models\Condition::class;

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
                ->rules('required', 'string', 'max:255'),

            Image::make('Image', 'image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('nullable')
                ->updateRules('nullable')
                ->prunable(),

            Text::make('Short Description', 'short_description')
                ->rules('nullable', 'string', 'max:255'),

            Trix::make('Symptoms & Causes', 'symptoms_causes')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Trix::make('Diagnosis & Treatment', 'diagnosis_treatment')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Trix::make('Care at Star Hospitals', 'care_at_star_hospitals')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Symptoms & Causes Slug', 'symptoms_causes_slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50')
                ->creationRules('unique:conditions,symptoms_causes_slug')
                ->updateRules('unique:conditions,symptoms_causes_slug,{{resourceId}}'),

            Text::make('Diagnosis & Treatment Slug', 'diagnosis_treatment_slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50')
                ->creationRules('unique:conditions,diagnosis_treatment_slug')
                ->updateRules('unique:conditions,diagnosis_treatment_slug,{{resourceId}}'),

            Text::make('Doctors & Departments Slug', 'doctors_departments_slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50')
                ->creationRules('unique:conditions,doctors_departments_slug')
                ->updateRules('unique:conditions,doctors_departments_slug,{{resourceId}}'),

            Text::make('Care at Star Hospitals Slug', 'care_at_star_hospitals_slug')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50')
                ->creationRules('unique:conditions,care_at_star_hospitals_slug')
                ->updateRules('unique:conditions,care_at_star_hospitals_slug,{{resourceId}}'),

            Text::make('Meta Title', 'meta_title')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Textarea::make('Meta Description', 'meta_description')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Boolean::make('Status', 'status')
                ->trueValue('active')
                ->falseValue('inactive'),

            BelongsToMany::make('Centre of Excellence', 'coes')
                ->searchable(),

            BelongsToMany::make('Speciality', 'specialities')
                ->searchable(),
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
        return '/resources/conditions/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/conditions/';
    }
}
