<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarController extends Controller
{
    private $headers = [
        "Gyártó",
        "Típus",
        "Szín"
    ];
    private $manufacturers = [
        "audi" => "Audi",
        "suzuki" => "Suzuki"
    ];
    public function index(Request $request)
    {
        $manufacturer = $request -> query("manufacturer", null);
        $cars = array_filter($this->loadCars(), function($car) use ($manufacturer){
            return is_null($manufacturer) || mb_strtolower($car["gyarto"]) == mb_strtolower($manufacturer);
        });
        return view("car.index", [
            "cars" => $cars,
            "headers" => $this->headers,
            "manufacturers" => $this->manufacturers,
            "selectedManufacturer" => $manufacturer
        ]);
    }
    public function search(Request $request)
    {
        $q = $request -> query("q", null);

        $cars = array_filter($this->loadCars(), function($car) use ($q){
           return is_null($q) ||
               mb_strtolower($car["gyarto"]) == mb_strtolower($q) ||
               mb_strtolower($car["tipus"]) == mb_strtolower($q) ||
               mb_strtolower($car["szin"]) == mb_strtolower($q);
        });

        return view("car.search", [
            "cars" => $cars,
            "headers" => $this->headers
    ]);
    }
    private function loadCars()
    {
        $text = file_get_contents("cars.json");
        return json_decode($text, true);
    }
}
