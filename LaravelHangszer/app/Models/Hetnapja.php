<?php
namespace App\Models;

class Hetnapja{
    public static function convert($ertek){
        $napok = ["Hétfő", "Kedd", "Szerda", "Csütörtök", "Péntek", "Szombat", "Vasárnap"];
        $szamok = [1, 2, 3, 4, 5, 6, 7];

        if(is_numeric($ertek))
        {
            for ($i = 0; $i<count($szamok); $i++)
            {
                if ($ertek == $szamok[$i])
                {
                    return "A hét " . $ertek . ". napja: " . $napok[$i];
                }
            }
            return ddd("A hét napjához adja meg a sorászámát (1 és 7 közötti szám)");
        }
        else
        {
            for ($i = 0; $i<count($napok); $i++)
            {
                if (strtolower($ertek) == strtolower($napok[$i]))
                {
                    return $ertek . " a hét " . $szamok[$i] . ". napja";
                }
            }
            return ddd("Ismeretlen nap!");
        }
        
    }
    
}