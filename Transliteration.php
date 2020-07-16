<?php
/**
 * User: mxaleev
 * Date: 15.07.2020
 * Time: 20:35
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;

use Xaleev\Utils\CaseLetters;

/**
 * Class Transliteration
 * @package Xaleev\Utils
 */
class Transliteration
{

    /**
     * @param string $input
     * @param string $type
     * @return string
     */
    public static function RusToEng(string $input, string $type = "symbol_code"):string
    {
        // Очистка пробелов и перевод в формат символьного кода
        $input = CaseLetters::SymbolCode($input);

        // Транслитерация
        if ($type == 'symbol_code')
        {
            $result = self::SimpleRusToEng($input);
        }
        else
        {
            $result = "Методы еще не написан";
        }

        return $result;
    }


    /**
     * @param $input
     * @return string
     */
    private static function SimpleRusToEng(string $input): string
    {
        $converter = [
            'а' => 'a',   'б' => 'b',   'в' => 'v',
            'г' => 'g',   'д' => 'd',   'е' => 'e',
            'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
            'и' => 'i',   'й' => 'i',   'к' => 'k',
            'л' => 'l',   'м' => 'm',   'н' => 'n',
            'о' => 'o',   'п' => 'p',   'р' => 'r',
            'с' => 's',   'т' => 't',   'у' => 'u',
            'ф' => 'f',   'х' => 'h',   'ц' => 'c',
            'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
            'ь' => '',    'ы' => 'y',   'ъ' => '',
            'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

            'А' => 'A',   'Б' => 'B',   'В' => 'V',
            'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
            'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
            'И' => 'I',   'Й' => 'I',   'К' => 'K',
            'Л' => 'L',   'М' => 'M',   'Н' => 'N',
            'О' => 'O',   'П' => 'P',   'Р' => 'R',
            'С' => 'S',   'Т' => 'T',   'У' => 'U',
            'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
            'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
            'Ь' => '',    'Ы' => 'Y',   'Ъ' => '',
            'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
        ];
        return strtr($input, $converter);
    }

}
