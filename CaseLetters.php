<?php
/**
 * User: mxaleev
 * Date: 06.09.2019
 * Time: 22:35
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;

/**
 * Class CaseLetters
 * @package Xaleev\Utils
 */
class CaseLetters
{

    /**
     * @param $input string
     * @return string
     */
    public static function ConvertFIO($input)
    {
        // Очистка пробелов в начале и в конце строки
        $result = trim($input);

        // Преобразование в верный формат регистра
        $result = mb_convert_case($result, MB_CASE_TITLE, "UTF-8");

        return $result;
    }


    /**
     * @param $input
     * @return string
     */
    public static function SymbolCode($input)
    {
        // Очистка пробелов в начале и в конце строки
        $result = trim($input);

        // Очистка всего кроме букв и цифр
        $result = preg_replace("/[^a-zA-ZА-Яа-я0-9\s]/iu", '', $input);

        // Замена пробелов на тире
        $result = preg_replace("/ /iu", '-', $result);

        // Преобразование в верный формат регистра
        $result = mb_strtolower($result);

        return $result;
    }

}
