<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\Mail;
use Symfony\Component\Mailer\Bridge\OhMySmtp\Transport\OhMySmtpTransportFactory;
use Symfony\Component\Mailer\Transport\Dsn;
use App\Mail\MailPace;

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
        Mail::extend('oh-my-smtp', function () {
            return (new OhMySmtpTransportFactory())->create(
                new Dsn(
                    'ohmysmtp+api',
                    'default',
                    config('services.ohmysmtp.key')
                )
            );
        });
    }
}
