<?php

namespace App\Providers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Location;
use App\Models\Price;
use App\Models\Product;
use Exception;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ShareConstantsViewProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $colorMetal = [];

        if (Cache::has('colorMetal')) {
            $colorMetal = Cache::get('colorMetal');
        } else {
            try {
                $colorMetal = Price::all();
                Cache::put('colorMetal', $colorMetal, now()->addHours(720));
            } catch (Exception $exception) {

            }
        }

        $cache = [
            'colorMetal' => $colorMetal,
        ];

        View::composer('*', function ($view) use ($cache) {
            return $view->with($cache);
        });
    }
}
