@extends('layout')
@section('content')

    <main class="container py-3 px-5">
        <section>
            <h1>{{$result->helyseg}}</h1>
            <table class="table table-bordered table-striped" style="width: 25rem">
                <tr>
                    <th>Jogállás</th>
                    <td>{{$result->jogallas}}</td>
                </tr>
                @if ($result->jogallas == "főváros" || $result->jogallas == "fővárosi kerület")
                <tr>
                    <th>Vármegye</th>
                    <td>{{$result->megye}}</td>
                </tr>
                <tr>
                    <th>Járás:</th>
                    <td>{{$result->jaras}}</td>
                </tr>
                @else
                <tr>
                    <th>Vármegye</th>
                    <td>{{$result->megye}} vármegye</td>
                </tr>
                <tr>
                    <th>Járás:</th>
                    <td>{{$result->jaras}} járás</td>
                </tr>
                @endif
                <tr>
                    <th>Terület</th>
                    <th>{{number_format($result->terulet,0,',',' ')}} ha</th>
                </tr>
                <tr>
                    <th>Népesség</th>
                    <th>{{number_format($result->nepesseg,0,',',' ')}} fő</th>
                </tr>
                <tr>
                    <th>Lakások száma</th>
                    <th>{{number_format($result->lakas,0,',',' ')}} db</th>
                </tr>
            </table>
            <div>
                <ul class="pagination">
                    <li class="page-item @if($first->id == $result->id) disabled @endif">
                        <a class="page-link" href="/telepules/@if(isset($prev)) {{$prev->id}} @endif">Elöző</a>
                    </li>
                    <li class="page-item @if($last->id == $result->id) disabled @endif">
                        <a class="page-link" href="/telepules/@if(isset($next)) {{$next->id}} @endif">Következő</a>
                    </li>
                </ul>
            </div>
        </section>
    </main>
@endsection
