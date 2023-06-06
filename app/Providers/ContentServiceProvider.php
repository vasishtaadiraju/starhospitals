<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\CentreOfExcellence;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public $menu_coes,$menu_branches;
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->menu_coes = CentreOfExcellence::where('status','active')->orderBy('order_number')->get(['id','name','slug','icon_image']);
        $this->menu_branches = Branch::where('status','active')->orderBy('order_number')->get(['id','name','slug']);

        view()->composer('layout.main', function($view) {
            $view->with(['coes' => $this->menu_coes,'branches'=>$this->menu_branches]);
        });
        view()->composer('home', function($view) {
            $view->with(['coes' => $this->menu_coes,'branches'=>$this->menu_branches]);
        });view()->composer('book-an-appointment.book-appointment', function($view) {
            $view->with(['coes' => $this->menu_coes,'branches'=>$this->menu_branches]);
        });
        view()->composer('coe', function($view) {
            $view->with(['coes' => $this->menu_coes]);
        });
    }
}
