<?php

namespace Travoltron\Laratrail;

use Illuminate\Support\Facades\Log;
use Monolog\Formatter\LineFormatter;
use Monolog\Handler\SyslogUdpHandler;
use Illuminate\Support\ServiceProvider;

class LaratrailServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Publish configuration file
        $this->publishes([
            __DIR__.'/config/laratrail.php' => config_path('laratrail.php')
        ], 'config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        if (app()->environment('local')) return;

        $monolog = Log::getMonolog();
        $syslog = new SyslogUdpHandler(config('laratrail.domain'), config('laratrail.port'));
        $format = new LineFormatter(strtoupper(app()->environment()) . ' %level_name%: %message% %extra%');
        $syslog->setFormatter($format);
        $monolog->pushHandler($syslog);
    }
}


