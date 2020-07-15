<?php
/**
 * User: mxaleev
 * Date: 06.09.2019
 * Time: 22:35
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;

/**
 * Class CalcDiscount
 * Класс для расчета скидок
 *
 * @package Xaleev\Utils
 */
class CalcDiscount
{

    /**
     * @param $oldPrice
     * @param $newPrice
     * @return float|int
     */
    public static function GetDiscount($oldPrice, $newPrice)
    {
        return self::GetDifferent($oldPrice, $newPrice);
    }


    /**
     * @param $oldPrice
     * @param $newPrice
     * @param array $params
     * @return float|int|string
     */
    public static function GetDiscountPercent($oldPrice, $newPrice, $params = null)
    {
        $different = self::GetDifferent($oldPrice, $newPrice);
        $result = ($different * 100) / $oldPrice;

        if ($params['with_text'])
        {
            $result = self::GetDiscountText($result);
        }

        return $result;
    }


    /**
     * @param $oldPrice
     * @param $newPrice
     * @return mixed
     */
    private static function GetDifferent($oldPrice, $newPrice)
    {
        $result = $oldPrice - $newPrice;
        return $result;
    }


    /**
     * @param $percent
     * @return string
     */
    private static function GetDiscountText($percent)
    {
        $result = floor($percent / 5) * 5;
        return "более $result";
    }

}
