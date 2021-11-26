<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Sodium\add;

class BookController extends Controller
{
    private $headers = [
        "Cím",
        "Szerző",
        "Kategória",
        "Kiadó",
        "Oldalak száma"
    ];
    private function uniqueCategories(){
        $data = $this->loadData();
        $categories = [];
        foreach ($data as $d)
        {
            array_push($categories, $d["kategoria"]);
        }
        $unique = array_unique($categories);
        $unique2 = [];
        foreach ($unique as $key => $value)
        {
            $unique2[$value] = $value;
        }
        return $unique2;
    }

    public function index(Request $request){
        $category = $request->query("Kategória", null);
        $konyvek = array_filter($this->loadData(), function ($konyv) use ($category){
            return is_null($category) || mb_strtolower($category) == mb_strtolower($konyv["kategoria"]);
        });
        return view("book.books", [
            "tomb" => $konyvek,
            "headers" => $this->headers,
            "categories" => $this->uniqueCategories(),
            "selectedCategory" => $category
        ]);
    }
    private function loadData(){
        $text = file_get_contents("konyvek.json");
        return json_decode($text, true);
    }
}
