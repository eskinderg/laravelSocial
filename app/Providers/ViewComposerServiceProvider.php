<?php
namespace Social\Providers;

use Illuminate\Support\ServiceProvider;
use Social\Models\Message;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
          view()->composer(
            'layout.header', 'Social\Http\ViewComposers\HeaderViewComposer'
          );
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
