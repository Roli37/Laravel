@extends('layouts.horselist')
@section("title", "USA Lovak táblázat")
@section("h1")
<h1>Az USA államainak nemzeti lovai (Felsorolás)</h1><br>
@endsection
@section("content")
<ul>
<?php foreach($tomb as $t): ?>
    <li><?= $t["fajta"] . " " . "(" . $t["allam"] . " - " . $t["ev"] . ")"?></li>
<?php endforeach ?>
</ul>
@endsection
@section("vissza")
<h3><a href="{{route('home')}}">Vissza</a></h3>
@endsection