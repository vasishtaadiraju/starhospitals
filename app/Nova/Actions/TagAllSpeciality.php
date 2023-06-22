<?php

namespace App\Nova\Actions;

use App\Models\CentreOfExcellence;
use App\Models\Speciality;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;
use Laravel\Nova\Http\Requests\NovaRequest;

class TagAllSpeciality extends Action
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
            $coe_ids = CentreOfExcellence::where('status', 'active')->pluck('id');
            $speciality_ids = Speciality::where('status', 'active')->pluck('id');

            foreach ($coe_ids as $coe_id) {
                DB::table('branch_coe')->insert([
                    'coe_id' => $coe_id,
                    'branch_id' => $model->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            }

            foreach ($speciality_ids as $speciality_id) {
                DB::table('branch_speciality')->insert([
                    'speciality_id' => $speciality_id,
                    'branch_id' => $model->id,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
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
