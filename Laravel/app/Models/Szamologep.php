<?php
namespace App\Models;

class Szamologep{
    public static function osszead($a, $b)
    {
        return $a . " + " . $b . " = " . $a+$b;
    }
    public static function kivon($a, $b)
    {
        return $a . " - " . $b . " = " . $a-$b;
    }
    public static function szoroz($a, $b)
    {
        return $a . " * " . $b . " = " . $a*$b;
    }
    public static function oszt($a, $b)
    {
        if ($b != 0)
        {
            return $a . " / " . $b . " = " . $a/$b;
        }
        return ddd("Nullával nem lehet osztani:(");
    }
}