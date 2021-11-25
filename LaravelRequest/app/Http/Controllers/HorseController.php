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
            "tomb" => $this->loadData()
        ]);
    }
    public function table()
    {
        return view("horse.table",[
            "tomb" => $this->loadData()
        ]);
    }
    public function grid()
    {
        return view("horse.grid",[
            "tomb" => $this->loadData()
        ]);
    }
    private function loadData()
    {
        $adatok = json_decode(file_get_contents("usalovak.json"),true);
        return $adatok;
    }
}
