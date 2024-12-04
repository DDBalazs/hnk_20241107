@extends('layout')
@section('content')

    <main class="container py-3 px-5">
        <section>
            <h1>Magyarország települései</h1>
            <div class="table-responsive">

                <table class="table table-bordered table-striped">
                    <thead class="table-dark">
                        <tr>
                            <th class="text-center">#</th>
                            <th>Helység</th>
                            <th>Jogállás</th>
                            <th>Vármegye</th>
                            <th>Járás</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach ($result as $row)
                        <tr>
                            <td class="text-center">{{$row->id}}</td>
                            <td><a href="/telepules/{{$row->id}}">{{$row->helyseg}}</a></td>
                            <td>{{$row->jogallas}}</td>
                            @if ($row->jogallas == "főváros" || $row->jogallas == "fővárosi kerület")
                            <td>{{$row->megye}}</td>
                            <td>{{$row->jaras}}</td>

                            @else
                            <td>{{$row->megye}} vármegye</td>
                            <td>{{$row->jaras}} járás</td>

                            @endif
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th class="text-center">#</th>
                        <th>Helység</th>
                        <th>Jogállás</th>
                        <th>Vármegye</th>
                        <th>Járás</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($result as $row)
                    <tr>
                        <td>{{$row->id}}</td>
                        <td><a href="/telepules/{{$row->id}}">{{$row->helyseg}}</a></td>
                        <td>{{$row->jogallas}}</td>
                        @if ($row->jogallas == "főváros" || $row->jogallas == "fővárosi kerület")
                        <td>{{$row->megye}}</td>
                        <td>{{$row->jaras}}</td>

                        @else
                        <td>{{$row->megye}} vármegye</td>
                        <td>{{$row->jaras}} járás</td>

                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{$result->links("pagination::bootstrap-4")}}
        </section>
    </main>
@endsection




