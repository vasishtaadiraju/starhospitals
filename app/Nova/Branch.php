<?php

namespace App\Nova;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

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
        'id', 'name', 'region.name'
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
                ->sortable()
                ->rules('required', 'string', 'max:50'),

            BelongsTo::make('Region')
                ->withoutTrashed(),

            Text::make('Contact', 'contact')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:20'),

            Text::make('Address', 'address')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Email::make('Email', 'email')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'email:rfc,strict,dns,filter', 'max:100')
                ->creationRules('unique:branches,email')
                ->updateRules('unique:branches,email,{{resourceId}}'),

            Number::make('Order Number', 'order_number')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Image::make('Background Image Desktop', 'bg_image_desktop')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Background Image Desktop Alt', 'bg_image_desktop_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Background Image Mobile', 'bg_image_mobile')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Background Image Mobile Alt', 'bg_image_mobile_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Banner Desktop', 'banner_desktop')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Banner Desktop Alt', 'banner_desktop_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Banner Mobile', 'banner_mobile')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Banner Mobile Alt', 'banner_mobile_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Trix::make('About', 'about')
                ->withFiles('public')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Image::make('About Image', 'about_image')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('About Image Alt', 'about_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Number::make('Number of Doctors', 'no_of_doctors')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Number::make('Number of Nurses', 'no_of_nurses')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            Number::make('Number of Beds', 'no_of_beds')
                ->hideFromIndex()
                ->rules('nullable', 'integer', 'numeric'),

            URL::make('UTM link', 'utm_link')
                ->hideFromIndex()
                ->rules('nullable', 'url'),

            URL::make('Map link', 'map_link')
                ->hideFromIndex()
                ->rules('nullable', 'url'),

            URL::make('Embed map link', 'embed_map_link')
                ->hideFromIndex()
                ->rules('nullable', 'url'),

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

            Boolean::make('Status', 'status')
                ->trueValue('active')
                ->falseValue('inactive'),

            BelongsToMany::make('User', 'users')
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

    public function subtitle()
    {
        return "Region: {$this->region->name}";
    }

    public static function redirectAfterCreate(NovaRequest $request, $resource)
    {
        return '/resources/branches/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/branches/';
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        if (DB::table('role_user')->where('user_id', $request->user()->id)->where('role_id', 2)->exists()) {
            return $query->where('id', $request->user()->branch_id);
        }

        return $query;
    }
}
