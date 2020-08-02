<?php
/**
 * User: mxaleev
 * Date: 29.07.2020
 * Time: 11:52
 * @author Mikhail Khaleev <info@xaleev.ru>
 */

namespace Xaleev\Utils;


class ConvertsFormats
{

    /**
     * @param $array
     * @param $xml
     * @param $child_name
     * @return mixed
     */
    public static function JsonToXml($array, $xml, $child_name)
    {
        foreach ($array as $k => $v) {

            if(is_array($v))
            {
                (is_int($k)) ? self::JsonToXml($v, $xml->addChild($child_name), $v) : self::JsonToXml($v, $xml->addChild(strtolower($k)), $child_name);
            }
            else
            {
                (is_int($k)) ? $xml->addChild($child_name, $v) : $xml->addChild(strtolower($k), $v);
            }

        }

        return $xml->asXML();
    }

}
