@extends("layouts.main")
@section("css")
    body{
        background-color: lightblue;
    }
    tr:nth-child(even){
        background-color: lightskyblue;
    }
@endsection
@section("title", "Könyvek oldal")
@section("content")
    <h1 class="text-center">Könyvek</h1>
    {!! Form::open(["route" => "home", "method" => "get"]) !!}
    @if (count($tomb) > 0)
        <div class="container mt-3">
            <div class="row">
                <div class="col-4">Kategória</div>
                <div class="col-4">
                    {!! Form::select("Kategória", $categories, $selectedCategory, [
                        "placeholder" => "Válassz egy kategóriát",
                        "class" => "form-control"
                    ]) !!}
                </div>
                <div class="col-4">
                    {!! Form::submit("Keresés",[
                        "class" => "btn btn-success"
                    ]) !!}
                </div>
            </div>
            <table class="table mt-3">
                <tr class="bg-dark text-white">
                    @foreach($headers as $h)
                        <th><?= $h ?></th>
                    @endforeach
                </tr>
                @foreach($tomb as $t)
                    <tr>
                        <td><?= $t["cim"]?></td>
                        <td><?= $t["szerzo"]?></td>
                        <td><?= $t["kategoria"]?></td>
                        <td><?= $t["kiado"]?></td>
                        <td><?= $t["oldalak_szama"]?></td>
                    </tr>
                @endforeach
            </table>
        </div>


    @else
    <div>Nincs adat</div>
    @endif
@endsection