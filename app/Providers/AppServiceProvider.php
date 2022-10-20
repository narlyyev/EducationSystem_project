<?php

namespace App\Providers;

use App\Models\Classroom;
use App\Models\Course;
use App\Models\Teacher;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();
        Model::preventLazyLoading(!app()->isProduction());
//        Model::preventLazyLoading(!app()->isProduction());
//
//        View::composer('app.nav', function ($view) {
//            $teachers = Teacher::withCount(['products'])
//                ->get();
//            $courses = Course::withCount(['products'])
//                ->get();
//            $classrooms = Classroom::withCount(['products'])
//                ->get();
//
//            $view->with([
//                'teachers' => $teachers,
//                'courses' => $courses,
//                'classrooms' => $classrooms,
//            ]);
//        });
    }
}
