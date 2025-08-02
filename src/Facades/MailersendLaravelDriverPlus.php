<?php

namespace Lucvk\MailersendLaravelDriverPlus\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Lucvk\MailersendLaravelDriverPlus\MailersendLaravelDriverPlus
 */
class MailersendLaravelDriverPlus extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Lucvk\MailersendLaravelDriverPlus\MailersendLaravelDriverPlus::class;
    }
}
