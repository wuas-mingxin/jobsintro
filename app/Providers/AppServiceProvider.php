<?php

namespace App\Providers;
use App\Models\WuasGeneralSetting;
use Illuminate\Support\Facades\Schema;
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
        if(Schema::hasTable('wuas_general_settings')){
            $activeTemplate = activeTemplate();
            $general = WuasGeneralSetting::first();
            $viewShare['general'] = $general;
            $viewShare['activeTemplate'] = $activeTemplate;
            $viewShare['activeTemplateTrue'] = activeTemplate(true);
            view()->share($viewShare);
        }
    }
}
