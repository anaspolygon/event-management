<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use App\Models\Event;
use App\Models\Attendee;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();

        // Gate::define('update-event',function($user,Event $event){
        //       return $user->id === $event->user_id;     
        // });

        // Gate::define('delete-event',function($user,Event $event,Attendee $attendee){
        //       return $user->id === $event->user_id || $user->id === $attendee->user_id;
        // });
    }
}
