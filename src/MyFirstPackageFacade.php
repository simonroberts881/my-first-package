<?php

namespace Simonroberts881\MyFirstPackage;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Simonroberts881\MyFirstPackage\Skeleton\SkeletonClass
 */
class MyFirstPackageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'my-first-package';
    }
}
