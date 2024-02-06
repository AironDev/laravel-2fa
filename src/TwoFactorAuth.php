<?php

namespace Airondev\Laravel2FA;

use Airondev\Laravel2FA\Drivers\BaseDriver;
use Airondev\Laravel2FA\Contracts\TwoFactorDriverContract;

class TwoFactorAuth
{
    /**
     * Get the two-factor driver.
     *
     * @return \Airondev\Laravel2FA\Contracts\TwoFactorDriverContract
     */
    public static function getDriver(): TwoFactorDriverContract
    {
        $driver = config('laravel-2fa.driver', BaseDriver::class);

        return new $driver();
    }
}
