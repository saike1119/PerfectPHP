<?php

class Employee2
{
    public $name;
    public static $company = '技術評論社';

    public function getCompany()
    {
        return self::$company;
    }

}

$hoge = new Employee2();
echo '従業員はみんな', Employee2::$company, 'に勤めています', PHP_EOL;
echo '従業員はみんな', $hoge->getCompany(), 'に勤めています', PHP_EOL;