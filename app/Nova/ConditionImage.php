<?php

namespace App\Nova;

use App\Models\Condition;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Http\Requests\NovaRequest;

class ConditionImage extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var class-string<\App\Models\ConditionImage>
     */
    public static $model = \App\Models\ConditionImage::class;

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

            Select::make('Condition', 'condition_id')->options(function () {
                $conditions = Condition::where('status', 'active')->get(['id', 'name']);
                $condition_pair = [];

                foreach ($conditions as $condition) {
                    $condition_pair[$condition->id] = $condition->name;
                }

                return $condition_pair;
            }),

            Image::make('Image', 'image')
                ->disk('s3')
                ->hideFromIndex()
                ->rules('image', 'max:1024')
                ->creationRules('required')
                ->updateRules('nullable')
                ->prunable(),

            Number::make('Order Number', 'order_number')
                ->hideFromIndex()
                ->rules('required', 'integer', 'numeric')
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
}
