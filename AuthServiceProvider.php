<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Policies\SystemPolicy;
use App\Policies\MasterPolicy;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
         SystemPolicy::userPolicies();
         SystemPolicy::rolePolicies();
         MasterPolicy::subscriptionPolicies();
         MasterPolicy::authorPolicies();
         MasterPolicy::readerPolicies();
         MasterPolicy::issuePolicies();
         MasterPolicy::enquireyPolicies();
         MasterPolicy::demoPolicies();
        //
    }
}
