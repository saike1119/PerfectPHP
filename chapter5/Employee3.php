<?php

class Employee3
{
    public static $company = '技術商店';

    public static function getCompany()
    {
        return self::$company;
    }

    public static function setCompany($value)
    {
        return self::$company = $value;
    }

}

echo '従業員はみんな', Employee3::$company, 'に勤めています', PHP_EOL;
echo '従業員はみんな', Employee3::setCompany('技術評論社'), 'に勤めています', PHP_EOL;