<?php
/**
 * User: mxaleev
 * Date: 28.07.2020
 * Time: 18:46
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;


/**
 * Class PrepareData
 * Класс предоставляет методы для удаления мусора
 *
 * @package Xaleev\Utils
 */
class PrepareData
{

    /**
     * @param $str
     * @return string
     */
    public static function TotalClear($str)
    {
        $str = trim($str);
        $str = stripslashes($str);
        $str = htmlspecialchars($str);
        return $str;
    }

}
