<?php

namespace TheGeekEnginner\UsersExtras;

use Illuminate\Support\Facades\Facade;

/**
 * @see \TheGeekEnginner\UsersExtras\UsersExtras
 */
class UsersExtrasFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'usersextras';
    }
}
