<?php

namespace App\Providers;

use App\Models\Branch;
use App\Models\CentreOfExcellence;
use App\Models\Speciality;
use Illuminate\Support\ServiceProvider;

class ContentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public $menu_coes,$menu_branches,$specialists;
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->menu_coes = CentreOfExcellence::where('status','active')->orderBy('order_number')->with(['specialities'=>function($query){
            $query->where('status','active')->orderByPivot('coe_speciality.order_number');
        }])->get(['id','name','slug','icon_image']);
        $this->menu_branches = Branch::where('status','active')->orderBy('order_number')->get(['id','name','slug','map_link']);
        $this->specialists = CentreOfExcellence::where('status','active')->orderBy('order_number')->with(['specialities'=>function($query){
            $query->whereHas('specialists')->where('status','active')->whereNotNull('specialist')->with('specialists',function($query){
                $query->whereNotNull('region_id');
            })->orderBy('coe_speciality.order_number')->select(['specialities.id','name','slug','icon_image','specialist']);
        }])->get(['id','name','slug','icon_image']);
        // $this->specialists = Speciality::whereHas('specialists')->where('status','active')->with('specialists',function($query){
        //     $query->whereNotNull('region_id');
        // })->orderBy('coe_speciality.order_number')->get(['specialities.id','name','slug','icon_image']);
        view()->composer('layout.main', function($view) {
            $view->with(['coes' => $this->menu_coes,'branches'=>$this->menu_branches,'specialists'=>$this->specialists]);
        });
        view()->composer('home', function($view) {
            $view->with(['coes' => $this->menu_coes,'branches'=>$this->menu_branches]);
        });
        view()->composer('book-an-appointment.find-doctor', function($view) {
            $view->with(['coes' => $this->menu_coes,'branches'=>$this->menu_branches]);
        });
        view()->composer('branch', function($view) {
            $view->with(['coes' => $this->menu_coes,'branches'=>$this->menu_branches]);
        });
        view()->composer('coe', function($view) {
            $view->with(['coes' => $this->menu_coes]);
        });
        view()->composer('international-patients', function($view) {
            $view->with(['coes' => $this->menu_coes]);
        });
        view()->composer('book-an-appointment.video-consultation', function($view) {
            $view->with(['branches' => $this->menu_branches]);
        });
        view()->composer('specialist', function($view) {
            $view->with(['coes' => $this->menu_coes]);
        });
    }
}
