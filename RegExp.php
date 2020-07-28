<?php
/**
 * User: mxaleev
 * Date: 28.07.2020
 * Time: 19:18
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;


/**
 * Class RegExp
 * Часто используемые регулярные выражения
 *
 * @package Xaleev\Utils
 */
class RegExp
{

    /**
     * @param $str
     * @param string $language <p>Языки могут быть cyrillic, latin, all</p>
     * @return string
     */
    public static function GetOnlyWord($str, $language = 'all')
    {

        switch ($language)
        {
            case 'latin':
                $result = preg_replace("/[^a-zA-Z]/", "", $str);
                break;
            case 'cyrillic':
                $result = preg_replace("/[^а-яА-Я]/", "", $str);
                break;
            default:
                $result = preg_replace("/[^а-яА-Яa-zA-Z]/", "", $str);
        }

        return $result;
    }

}
