<?php

namespace App\Providers;

use App\Nova\AboutUs;
use App\Nova\Blog;
use App\Nova\Branch;
use App\Nova\CentreOfExcellence;
use App\Nova\Homepage;
use App\Nova\Media;
use App\Nova\Region;
use App\Nova\Role;
use App\Nova\Speciality;
use App\Nova\Testimonial;
use App\Nova\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\Dashboards\Main;
use Laravel\Nova\Menu\MenuItem;
use Laravel\Nova\Menu\MenuSection;
use Laravel\Nova\Nova;
use Laravel\Nova\NovaApplicationServiceProvider;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        Nova::withoutNotificationCenter();

        Nova::mainMenu(function (Request $request) {
            return [
                MenuSection::dashboard(Main::class)->icon('chart-bar'),

                MenuSection::resource(Homepage::class)->icon('home'),

                MenuSection::resource(AboutUs::class)->icon('identification'),

                MenuSection::resource(User::class)->icon('user-group'),

                MenuSection::make('Location', [
                    MenuItem::resource(Region::class),
                    MenuItem::resource(Branch::class)
                ])->icon('location-marker')->collapsable(),

                MenuSection::resource(CentreOfExcellence::class),

                MenuSection::resource(Speciality::class),

                MenuSection::resource(Testimonial::class),

                MenuSection::resource(Blog::class),

                MenuSection::resource(Media::class),
            ];
        });

        Nova::footer(function ($request) {
            return '<center><b>Copyright &copy; 2023 by Star Hospitals. All Rights Reserved.</b></center>';
        });
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
            ->withAuthenticationRoutes()
            ->withPasswordResetRoutes()
            ->register();
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        Gate::define('viewNova', function ($user) {
            return in_array($user->email, [
                //
            ]);
        });
    }

    /**
     * Get the dashboards that should be listed in the Nova sidebar.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [
            new \App\Nova\Dashboards\Main,
        ];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
