<?php

namespace App\Providers;

use App\Models\Tractor;
use Illuminate\Support\ServiceProvider;

class TractorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        // Шэринг данных `$tractors` со всеми представлениями
        view()->composer('indexes.layout2', function ($view) {
            $tractors = Tractor::all(); // Получение всех тракторов
            $view->with('tractors', $tractors); // Передача в шаблон
        });
    }
}
