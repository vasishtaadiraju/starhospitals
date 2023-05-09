<?php

namespace App\Nova;

use App\Models\Branch;
use App\Models\Region;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rules;
use Laravel\Nova\Actions\ExportAsCsv;
use Laravel\Nova\Fields\Avatar;
use Laravel\Nova\Fields\BelongsToMany;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\Email;
use Laravel\Nova\Fields\Gravatar;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Password;
use Laravel\Nova\Fields\PasswordConfirmation;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\URL;
use Laravel\Nova\Http\Requests\NovaRequest;

class User extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\User>
     */
    public static $model = \App\Models\User::class;

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
    public static $search = ['name'];

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

            // Gravatar::make('Avatar', 'small_image'),

            Text::make('Name', 'name')
                ->sortable()
                ->rules('required', 'string', 'max:50'),

            Email::make('Email', 'email')
                ->rules('nullable', 'string', 'email:rfc,strict,dns,filter', 'max:100')
                ->creationRules('unique:users,email')
                ->updateRules('unique:users,email,{{resourceId}}'),

            Password::make('Password')
                ->onlyOnForms()
                ->creationRules('nullable', Rules\Password::defaults(), 'confirmed')
                ->updateRules('nullable', Rules\Password::defaults(), 'confirmed'),

            PasswordConfirmation::make('Password Confirmation'),

            Text::make('Designation', 'designation')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:50'),

            Textarea::make('Qualification', 'qualification')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Text::make('Experience', 'experience')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:20'),

            Text::make('Short Description', 'short_description')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:255'),

            Trix::make('Long Description', 'long_description')
                ->withFiles('public')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Trix::make('Expertise', 'expertise')
                ->withFiles('public')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Trix::make('Memberships', 'memberships')
                ->withFiles('public')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Trix::make('Publications', 'publications')
                ->withFiles('public')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

            Trix::make('Affiliations and Fellowships', 'affiliations_and_fellowships')
                ->withFiles('public')
                ->hideFromIndex()
                ->rules('nullable', 'string'),

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

            Avatar::make('Small Image', 'small_image')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Small Image Alt', 'small_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

            Image::make('Large Image', 'large_image')
                ->disk('public')
                ->hideFromIndex()
                ->rules('nullable', 'image', 'max:1024'),

            Text::make('Large Image Alt', 'large_image_alt')
                ->hideFromIndex()
                ->rules('nullable', 'string', 'max:100'),

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

            Select::make('Branch', 'branch_id')
                ->options(function () {

                    $branch_select = [];
                    $branches = Branch::get(['id', 'name']);

                    foreach ($branches as $branch) {
                        $branch_select[$branch->id] = $branch->name;
                    }

                    return $branch_select;
                })
                ->displayUsingLabels()
                ->help('Please select the branch, only if this user is a branch admin.')
                ->hideFromIndex(),

            BelongsToMany::make('Region', 'regions')
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

            BelongsToMany::make('Speciality', 'specialities')
                ->searchable()
                ->fields(function () {
                    return [
                        Number::make('Order Number', 'order_number')
                    ];
                }),

            BelongsToMany::make('Role', 'roles')
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
        return [
            ExportAsCsv::make()->nameable()->withFormat(function ($model) {
                $doctor = [];
                $doctor['Name'] = $model->name;

                $regions = DB::table('region_user')->where('user_id', $model->id)->get(['region_id', 'order_number']);

                foreach ($regions as $key => $region) {
                    $doctor['Region ' . $key + 1] = Region::where('id', $region->region_id)->pluck('name')->first();
                }

                return $doctor;
            }),
        ];
    }

    public static function redirectAfterCreate(NovaRequest $request, $resource)
    {
        return '/resources/users/';
    }

    public static function redirectAfterUpdate(NovaRequest $request, $resource)
    {
        return '/resources/users/';
    }

    public static function indexQuery(NovaRequest $request, $query)
    {
        if (DB::table('role_user')->where('user_id', $request->user()->id)->where('role_id', 2)->exists()) {
            $branch_id = $request->user()->branch_id;

            $user_ids = DB::table('branch_user')->where('branch_id', $branch_id)->pluck('user_id')->toArray();

            return $query->whereIn('id', $user_ids);
        }

        return $query;
    }
}
