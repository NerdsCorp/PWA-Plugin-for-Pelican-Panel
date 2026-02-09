<?php

namespace PwaPlugin\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;
use PwaPlugin\Http\Controllers\PwaController;
use PwaPlugin\Http\Controllers\PwaPushController;

class PwaPluginRouteServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->routes(function (): void {
            if (Route::has('pwa.manifest')) {
                return;
            }

            Route::middleware('web')->group(function () {
                Route::get('/manifest.json', [PwaController::class, 'manifest'])->name('pwa.manifest');
                Route::get('/service-worker.js', [PwaController::class, 'serviceWorker'])->name('pwa.sw');
            });

            Route::middleware(['web', 'auth', 'throttle:60,1'])->group(function () {
                Route::post('/pwa/subscribe', [PwaPushController::class, 'subscribe'])->name('pwa.subscribe');
                Route::post('/pwa/unsubscribe', [PwaPushController::class, 'unsubscribe'])->name('pwa.unsubscribe');
                Route::post('/pwa/test', [PwaPushController::class, 'test'])->name('pwa.test');
            });
        });
    }
}
