<?php

namespace App\Observers;

use App\Models\Price;
use App\Models\User;
use Illuminate\Support\Facades\Artisan;


class PriceObserver
{

    protected function cacheClear()
    {
        Artisan::call('cache:clear');
    }

    public function created()
    {
        $this->cacheClear();
    }

    public function updated()
    {
        $this->cacheClear();
    }

    /**
     * Handle the Price "deleted" event.
     *
     * @param Price $price
     * @return void
     */
    public function deleted(Price $price)
    {
        //
    }

    /**
     * Handle the Price "restored" event.
     *
     * @param Price $price
     * @return void
     */
    public function restored(Price $price)
    {
        //
    }

    /**
     * Handle the Price "force deleted" event.
     *
     * @param Price $price
     * @return void
     */
    public function forceDeleted(Price $price)
    {
        //
    }
}
