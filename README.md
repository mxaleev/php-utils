# PHP-Utils
В пространстве имен `Xaleev\Utils` собраны классы ускоряющие разработку.

-------------
## Класс Converters
`use Xaleev\Utils\Converters`

#### `BytesToAuto($input, $precision = 2, $lang = 'en')`
Конвертация байт в часто используемые выличины (KB, MB, GB, TB)

#### `MicrosecondToSecond($input)`
Конвертация миллисекунд в секунды

---------------
## Класс Morphology
`use Xaleev\Utils\Morphology`

#### `getCountYears($input, $withDigital)`
Возвращает переданное количество лет текстом

#### `getCountMonths($input, $withDigital)`
Возвращает переданное количество месяцев текстом

#### `getCountDays($input, $withDigital)`
Возвращает переданное количество дней текстом

---------------
## Класс Transliteration
`use Xaleev\Utils\Transliteration`

#### `RusToEng($input)`
Возвращает переданный текст в транслите
