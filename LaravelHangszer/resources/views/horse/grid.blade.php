@extends("layouts.horsegrid")
@section("title", "USA állam lovak grid")
@section("h1")
<h1 class="text-center">Az USA államainak nemzeti lovai (Grid)</h1>
@endsection
@section("content")
    <div class="row">
    <?php foreach($tomb as $t): ?>
        <div class="col-4 horse">
            <p class="bold"><?=$t["fajta"]?></p>
            <p><?=$t["allam"] . " (" . $t["ev"] . ")"?></p>
            <?php $url = asset('img')?>
            <img src="<?= $url ?>/<?= $t["kep"]?>" class="img-fluid" alt="kep">
            <p><?=$t["leiras"]?></p>
        </div>
    <?php endforeach ?>
@endsection
@section("vissza")
<h3><a href="{{route('home')}}">Vissza</a></h3>
@endsection
