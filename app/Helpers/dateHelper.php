<?php
namespace App\Helpers;


use Carbon\Carbon;

class dateHelper
{

    private static $format ='Y-m-d';


    public static function startOfWeek()
    {
        return Carbon::now()->startOfWeek()->format(static::$format);
    }

    public static function EndOfWeek()
    {
        return Carbon::now()->endOfWeek()->format(static::$format);
    }

    public static function startOfYear()
    {
        return Carbon::now()->startOfYear()->format(static::$format);
    }

    public static function EndOfYear()
    {
        return Carbon::now()->endOfYear()->format(static::$format);
    }

    public static function threeMonthAgo()
    {
        return Carbon::now()->subMonth(3)->format(static::$format);
    }

    public static function today()
    {
        return Carbon::now()->format(static::$format);
    }
}


?>
