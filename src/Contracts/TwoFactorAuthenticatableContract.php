<?php

namespace Airondev\Laravel2FA\Contracts;

use Airondev\Laravel2FA\Models\Token;

interface TwoFactorAuthenticatableContract
{
    /**
     * Generates a new two-factor authentication token.
     *
     * @return \Airondev\Laravel2FA\Models\Token
     */
    public function generateTwoFactorToken(): Token;

    /**
     * Send the given notification.
     *
     * @param  mixed  $instance
     * @return void
     */
    public function notify($instance);
}
