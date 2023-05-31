<?php

namespace App\Nova\Actions;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class DoctorSync extends Action
{
    use InteractsWithQueue, Queueable;

    /**
     * Perform the action on the given models.
     *
     * @param  \Laravel\Nova\Fields\ActionFields  $fields
     * @param  \Illuminate\Support\Collection  $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models)
    {
        foreach ($models as $model) {
            $coe_id = DB::table('coe_speciality')->where('speciality_id', $model->id)->pluck('coe_id')->first();

            $user_ids = DB::table('coe_user')->where('coe_id', $coe_id)->pluck('user_id');

            foreach ($user_ids as $user_id) {
                if (DB::table('speciality_user')->where('speciality_id', $model->id)->where('user_id', $user_id)->doesntExist()) {
                    DB::table('speciality_user')->insert([
                        'speciality_id' => $model->id,
                        'user_id' => $user_id
                    ]);
                }
            }
        }
    }

    /**
     * Get the fields available on the action.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @return array
     */
    public function fields(NovaRequest $request)
    {
        return [];
    }
}
