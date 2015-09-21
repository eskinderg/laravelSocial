<?php

namespace Social\Providers;

use Illuminate\Support\ServiceProvider;
use Social\Message;

class ViewComposerHeaderServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {


          //Data shared with sub view goes here
          
          view()->composer('layout.header',function($view)
          {
              $view->with('messageCount', \Social\Message::count());

          });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
