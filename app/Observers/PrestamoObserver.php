<?php

namespace App\Observers;

use App\Models\Prestamo;

class PrestamoObserver
{
    /**
     * Handle the Prestamo "created" event.
     */
    public function created(Prestamo $prestamo): void
    {
        //
    }

    /**
     * Handle the Prestamo "updated" event.
     */
    public function updated(Prestamo $prestamo): void
    {
        //
    }

    /**
     * Handle the Prestamo "deleted" event.
     */
    public function deleted(Prestamo $prestamo): void
    {
        //
    }

    /**
     * Handle the Prestamo "restored" event.
     */
    public function restored(Prestamo $prestamo): void
    {
        //
    }

    /**
     * Handle the Prestamo "force deleted" event.
     */
    public function forceDeleted(Prestamo $prestamo): void
    {
        //
    }
}
