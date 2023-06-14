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

class DataSync extends Action
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
            $branch_ids = DB::table('branch_doctor')->where('doctor_id', $model->id)->pluck('branch_id');
            $coe_ids = DB::table('coe_doctor')->where('doctor_id', $model->id)->pluck('coe_id');
            $speciality_ids = DB::table('doctor_speciality')->where('doctor_id', $model->id)->pluck('speciality_id');
            $testimonial_ids = DB::table('doctor_testimonial')->where('doctor_id', $model->id)->pluck('testimonial_id');
            $blog_ids = DB::table('doctor_blog')->where('doctor_id', $model->id)->pluck('blog_id');
            $media_ids = DB::table('doctor_media')->where('doctor_id', $model->id)->pluck('media_id');

            foreach ($branch_ids as $branch_id) {

                foreach ($testimonial_ids as $testimonial_id) {
                    if (!(DB::table('branch_testimonial')->where('branch_id', $branch_id)->where('testimonial_id', $testimonial_id)->exists())) {
                        DB::table('branch_testimonial')->insert([
                            'branch_id' => $branch_id,
                            'testimonial_id' => $testimonial_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }

                foreach ($blog_ids as $blog_id) {
                    if (!(DB::table('blog_branch')->where('branch_id', $branch_id)->where('blog_id', $blog_id)->exists())) {
                        DB::table('blog_branch')->insert([
                            'branch_id' => $branch_id,
                            'blog_id' => $blog_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }

                foreach ($media_ids as $media_id) {
                    if (!(DB::table('branch_media')->where('branch_id', $branch_id)->where('media_id', $media_id)->exists())) {
                        DB::table('branch_media')->insert([
                            'branch_id' => $branch_id,
                            'media_id' => $media_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }
            }

            foreach ($coe_ids as $coe_id) {

                foreach ($testimonial_ids as $testimonial_id) {
                    if (!(DB::table('coe_testimonial')->where('coe_id', $coe_id)->where('testimonial_id', $testimonial_id)->exists())) {
                        DB::table('coe_testimonial')->insert([
                            'coe_id' => $coe_id,
                            'testimonial_id' => $testimonial_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }

                foreach ($blog_ids as $blog_id) {
                    if (!(DB::table('blog_coe')->where('coe_id', $coe_id)->where('blog_id', $blog_id)->exists())) {
                        DB::table('blog_coe')->insert([
                            'coe_id' => $coe_id,
                            'blog_id' => $blog_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }

                foreach ($media_ids as $media_id) {
                    if (!(DB::table('coe_media')->where('coe_id', $coe_id)->where('media_id', $media_id)->exists())) {
                        DB::table('coe_media')->insert([
                            'coe_id' => $coe_id,
                            'media_id' => $media_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }
            }

            foreach ($speciality_ids as $speciality_id) {

                foreach ($testimonial_ids as $testimonial_id) {
                    if (!(DB::table('speciality_testimonial')->where('speciality_id', $speciality_id)->where('testimonial_id', $testimonial_id)->exists())) {
                        DB::table('speciality_testimonial')->insert([
                            'speciality_id' => $speciality_id,
                            'testimonial_id' => $testimonial_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }

                foreach ($blog_ids as $blog_id) {
                    if (!(DB::table('blog_speciality')->where('speciality_id', $speciality_id)->where('blog_id', $blog_id)->exists())) {
                        DB::table('blog_speciality')->insert([
                            'speciality_id' => $speciality_id,
                            'blog_id' => $blog_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
                }

                foreach ($media_ids as $media_id) {
                    if (!(DB::table('media_speciality')->where('speciality_id', $speciality_id)->where('media_id', $media_id)->exists())) {
                        DB::table('media_speciality')->insert([
                            'speciality_id' => $speciality_id,
                            'media_id' => $media_id,
                            'created_at' => now(),
                            'updated_at' => now()
                        ]);
                    }
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
