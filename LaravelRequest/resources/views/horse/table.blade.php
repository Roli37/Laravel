@extends("layouts.horsetable")
@section("title", "USA lovai táblázat")
@section("h1")
<h1 class="text-center">Az USA államainak nemzeti lovai (Táblázat)</h1>
@endsection
@section("content")
<table class="table table-striped table-responsive">
        <tr id="border">
            <th>Állam</th>
            <th>Fajta</th>
            <th>Leírás</th>
            <th>Év</th>
        </tr>
        <?php foreach($tomb as $t):?>
            <tr>
                <td><?=$t["allam"]?></td>
                <td><?=$t["fajta"]?></td>
                <td><?=$t["leiras"]?></td>
                <td><?=$t["ev"]?></td>
            </tr>
        <?php endforeach?>
    </table>
@endsection
@section("vissza")
<h3><a href="{{route('home')}}">Vissza</a></h3>
@endsection