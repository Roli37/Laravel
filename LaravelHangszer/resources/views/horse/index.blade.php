<?php
?>

@extends("layouts.main")

@section("title", "Horse index")

@section("content")
    <ul>
        <li><a href="{{route('horse.list')}}">Felsorolás</a></li>
        <li><a href="{{route('horse.table')}}">Táblázat</a></li>
        <li><a href="{{route('horse.grid')}}">Bootstrap GRID</a></li>
    </ul>
    <p>Forrás: <a href="https://hu.wikipedia.org/wiki/Muszt%C3%A1ng">Wikipedia</a></p>
@endsection
@section("vissza")
<h3><a href="/">Vissza</a></h3>
@endsection