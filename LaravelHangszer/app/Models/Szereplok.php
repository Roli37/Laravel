<?php
namespace App\Models;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class Szereplok{
    public static function find($csalad, $szereplo)
    {
        $path = resource_path("szereplok/{$csalad}/{$szereplo}.html");
        if (!file_exists($path))
        {
            return "A következő fájl nem található: " . $path;
        }
        return file_get_contents($path);
    }
    public static function findCsalad($csalad)
    {
        $path = resource_path("szereplok/{$csalad}.html");
        if (!file_exists($path))
        {
            throw new ModelNotFoundException;
        }
        return file_get_contents($path);
    }
    // public static function findImage($csalad, $szereplo)
    // {
    //     if($csalad == "mezga")
    //     {
    //         $path = public_path("images/{$csalad}/{$szereplo}.jpg");
    //     }
    //     else
    //     {
    //         $path = public_path("images/{$csalad}/{$szereplo}.png");
    //     }
    //     var_dump($path);
    //     return $path;
    // }
}