<?php

namespace App\Services;

use Carbon\Carbon;

class Session
{
    /**
     * @return mixed|string
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public static function getKeySession()
    {
        if (session()->has('key')) {
            return session()->get('key');
        }

        $key = sha1(Carbon::now());
        session()->put('key', $key);

        return $key;
    }
}
