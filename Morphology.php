<?php
/**
 * User: mxaleev
 * Date: 22.07.2019
 * Time: 23:35
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;

/**
 * Class Morphology
 * Класс для морфологического разбора количества
 *
 * @package Xaleev\Utils
 */
class Morphology
{

    /**
     * @param $count
     * @param bool $withDigital
     * @return int
     */
    public static function getCountYears($count, $withDigital = true)
    {
        $arData = ['год', 'года', 'лет', 'года'];
        return self::GetCardinal($count, $arData, $withDigital);
    }


    /**
     * @param $count
     * @param bool $withDigital
     * @return int
     */
    public static function getCountMonths($count, $withDigital = true)
    {
        $arData = ['месяц', 'месяца', 'месяцев', 'месяца'];
        return self::GetCardinal($count, $arData, $withDigital);
    }


    /**
     * @param $count
     * @param bool $withDigital
     * @return mixed|string
     */
    public static function getCountDays($count, $withDigital = true)
    {
        $arData = ['день', 'дня', 'дней', 'дня'];
        return self::GetCardinal($count, $arData, $withDigital);
    }

    
    /**
     * @param $count
     * @param $data
     * @param bool $withDigital
     * @return mixed|string
     */
    private static function GetCardinal($count, $data, $withDigital = true)
    {
        $cardinal = self::cardinal($count);

        $word = $data[$cardinal];

        if ($withDigital)
        {
            $result = "$count $word";
        }
        else
        {
            $result = $word;
        }

        return $result;

    }


    /**
     * @param $count
     * @return int
     */
    private static function cardinal($count)
    {
        $mod10  = $count % 10;
        $mod100 = $count % 100;

        if (is_int($count) && $mod10 == 1 && $mod100 != 11)
        {
            $type = 0;
        }
        elseif (($mod10 > 1 && $mod10 < 5) && ($mod100 < 12 || $mod100 > 14))
        {
            $type = 1;
        }
        elseif ($mod10 == 0 || ($mod10 > 4 && $mod10 < 10) || ($mod100 > 10 && $mod100 < 15))
        {
            $type = 2;
        }
        else
        {
            $type = 3;
        }

        return $type;
    }

}
