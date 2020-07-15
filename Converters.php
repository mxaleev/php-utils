<?php
/**
 * User: mxaleev
 * Date: 08.09.2019
 * Time: 12:53
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;


/**
 * Class Converters
 * Класс для конвертации величин
 *
 * @package Xaleev\Utils
 */
class Converters
{


    /**
     * Конвертация байт в часто используемые выличины
     *
     * @param $bytes
     * @param int $precision
     * @param string $lang
     * @return string
     */
    public static function BytesToAuto($bytes, $precision = 2, $lang = 'en')
    {
        $base = log($bytes, 1024);
        $suffixes = [
            'en' => ['', 'KB', 'MB', 'GB', 'TB'],
            'ru' => ['', 'КБ', 'МБ', 'ГБ', 'ТБ']
        ];

        return round(pow(1024, $base - floor($base)), $precision) . ' ' . $suffixes[$lang][floor($base)];
    }


    /**
     * Конвертация миллисекунд в секунды
     *
     * @param $microsecond
     * @return mixed
     */
    public static function MicrosecondToSecond($microsecond)
    {
        $arSecond = explode(" ", $microsecond);

        return $arSecond[1] + $arSecond[0];
    }

}
