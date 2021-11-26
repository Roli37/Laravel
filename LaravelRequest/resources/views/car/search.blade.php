@extends("layouts.main")
@section("title", "Autók")
@section("content")
    <div class="container">
        <h1 class="text-center">Keresés</h1>

        <div class="my-3">
            {!! Form::open(['route' => 'car.search', "method" => "get"]) !!}
            <div class="my-3">
                {!! Form::Label('q', 'Keresőszó'); !!}
                {!! Form::text("q", null, [
                    "placeholder" => "Írjon be valamit",
                    "class" => "form-control"
                ]) !!}
            </div>
            <div class="my-3">
                {!! Form::submit("Keresés",[
                    "class" => "btn btn-primary"
]               ) !!}
            </div>
            {!! Form::close() !!}
        </div>
        @if (count($cars) > 0)
            <table class="table table-striped">
                <tr>
                    @foreach ($headers as $h)
                        <th><?= $h ?></th>
                    @endforeach
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
    </div>
@endsection