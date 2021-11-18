<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HorseController extends Controller
{
    public function index()
    {
        return view("horse.index");
    }
    public function list()
    {
        return view("horse.list",[
            "tomb" => json_decode(file_get_contents("usalovak.json"),true)
        ]);
    }
    public function table()
    {
        return view("horse.table",[
            "tomb" => json_decode(file_get_contents("usalovak.json"),true)
        ]);
    }
    public function grid()
    {
        return view("horse.grid",[
            "tomb" => json_decode(file_get_contents("usalovak.json"),true)
        ]);
    }
    private function loadData()
    {
        $adatok = json_decode(file_get_contents("usalovak.json"),true);
        var_dump($adatok);
        return $adatok;
    }
}
