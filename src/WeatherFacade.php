<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019-10-16
 * Time: 下午 03:01
 */

namespace Hym510\Weather;

use Illuminate\Support\Facades\Facade;

class WeatherFacade extends Facade
{
    protected static function getFacadeAccessor() {
        return 'weather';
    }
}