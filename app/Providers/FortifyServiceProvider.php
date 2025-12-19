<?php

namespace App\Providers; //

use App\Actions\Fortify\CreateNewUser; //
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Http\Responses\LoginResponse;
use Illuminate\Cache\RateLimiting\Limit; //
use Illuminate\Http\Request; //
use Illuminate\Support\Facades\RateLimiter; //
use Illuminate\Support\ServiceProvider; //
use Illuminate\Support\Str;
use Laravel\Fortify\Actions\RedirectIfTwoFactorAuthenticatable;
use Laravel\Fortify\Fortify; //
use Laravel\Fortify\Contracts\CreatesNewUsers; //
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;


class FortifyServiceProvider extends ServiceProvider
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
        RateLimiter::for('login', function (Request $request) {
            $email = (string) $request->email;

            return Limit::perMinute(5)->by($email.$request->ip());
        });

        RateLimiter::for('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });

        Fortify::redirects('login', '/aluno/dashboard');

        Fortify::loginView(fn () => view('auth.login'));
        Fortify::registerView(fn () => view('auth.register'));
        Fortify::requestPasswordResetLinkView(fn () => view('auth.forgot-password'));
        Fortify::resetPasswordView(fn ($request) =>
            view('auth.reset-password', ['request' => $request])
        );
        Fortify::verifyEmailView(fn () => view('auth.verify-email'));
        Fortify::twoFactorChallengeView(fn () => view('auth.two-factor-challenge'));

        $this->app->singleton(
            LoginResponseContract::class,
            LoginResponse::class
        );

        $this->app->singleton(
            \Laravel\Fortify\Contracts\CreatesNewUsers::class,
            \App\Actions\Fortify\CreateNewUser::class
        );
    }
}
