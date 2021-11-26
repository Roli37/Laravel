@extends("layouts.main")
@section("title", "Autók")
@section("content")
    <div class="container">
        <h1 class="text-center">Autók</h1>

            {!! Form::open(['route' => 'home', "method" => "get"]) !!}
            <div class="my-3">
        </div>
        @if (count($cars) > 0)
        <table class="table table-striped">
            <tr>
                @foreach ($headers as $h)
                <th><?= $h ?></th>
                @endforeach
            </tr>
            <tr>
                <td>
                    {!! Form::select("manufacturer", $manufacturers, $selectedManufacturer, [
                        "placeholder" => "Gyártó kiválasztása",
                        "class" => "form-select"
                    ]) !!}
                </td>
                <td></td>
                <td>

                    {!! Form::submit("Keresés",[
                        "class" => "btn btn-primary"
    ]               ) !!}
                </td>
            </tr>
            @foreach ($cars as $a)
            <tr>
                <td><?= $a["gyarto"] ?></td>
                <td><?= $a["tipus"] ?></td>
                <td><?= $a["szin"] ?></td>
            </tr>
            @endforeach
        </table>
        @else
            <div class="alert alert-warning" role="alert">Nincs adat</div>
        @endif
        {!! Form::close() !!}
    </div>
@endsection