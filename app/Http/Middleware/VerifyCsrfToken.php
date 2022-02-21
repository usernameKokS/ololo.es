<?php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array
     */
    protected $except = [
        '7ja983e2r5cc46e83jpbcds5psw39dkzh6fc/*',
		't7x4jwvkt6nhkv8fzyrm97fqrhdn5nx2m5m2/*'
    ];
}
