<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Notification;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        View::composer('components.navbar', function ($view) {
            $notifications = collect();
            if (Auth::check()) {
                $notifications = Notification::with('post')
                    ->whereHas('post', fn($q) => $q->where('user_id', Auth::id()))
                    ->where('notify_at', '<=', now())
                    ->orderBy('notify_at', 'desc')
                    ->take(10)
                    ->get();
            }
            $view->with('notifications', $notifications);
        });
    }
}
