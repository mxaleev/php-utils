<?php
/**
 * User: mxaleev
 * Date: 28.07.2020
 * Time: 18:55
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;

use Xaleev\Utils\PrepareData;

/**
 * Class Api
 * Класс предоставляет методы для создания API
 *
 * @package Xaleev\Utils
 */
class Api
{

    /**
     * @param string $str
     * @return string
     */
    public static function GetClassNameByString($str)
    {

        $result = '';

        $str = PrepareData::TotalClear($str);

        if (stristr($str, '-'))
        {
            $arVar = preg_split("/[-]+/", $str);

            foreach ($arVar as $item)
            {
                $result .= ucfirst($item);
            }

        }
        else
        {
            $result .= ucfirst($str);
        }

        return $result;

    }

}
