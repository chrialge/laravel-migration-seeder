@extends('layout.app')

@section('content')
    <div class="p-5 mb-4 bg-dark text-light">
        <div class="container-fluid py-5">
            <h1 class="display-5 fw-bold">Custom jumbotron</h1>
            <p class="col-md-8 fs-4">
                Using a series of utilities, you can create this jumbotron, just
                like the one in previous versions of Bootstrap. Check out the
                examples below for how you can remix and restyle it to your liking.
            </p>
            <button class="btn btn-primary btn-lg" type="button">
                Example button
            </button>
        </div>
    </div>


    <div class="container py-5">
        <h3 class="py-3">AVAILABLE TICKET FOR TODAY:</h3>
        <div class="row row-cols-1">
            @forelse ($trains as $train)
                <div class="col">
                    <div class="table-responsive">
                        <table class="table table-primary">
                            <thead>
                                <tr>
                                    <th scope="col">Agency</th>
                                    <th scope="col">Partenza da</th>
                                    <th scope="col">Arrivo a</th>
                                    <th scope="col">data</th>
                                    <th scope="col">Orario di partenza</th>
                                    <th scope="col">Orario di Arrivo</th>
                                    <th scope="col">Prezzo</th>
                                    <th scope="col">Codice del treno</th>
                                    <th scope="col">Numero binario</th>
                                    <th scope="col">In Orario</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="">
                                    <td scope="row">{{ $train->agency }}</td>
                                    <td> {{ $train->starting_station }} </td>
                                    <td> {{ $train->arrival_station }} </td>
                                    <td> {{ $train->data }} </td>
                                    <td> {{ substr($train->starting_time, 0, -3) }} </td>
                                    <td> {{ substr($train->arrival_time, 0, -3) }} </td>
                                    <td> {{ $train->price }} &euro; </td>
                                    <td> {{ $train->code_train }} </td>
                                    <td> {{ $train->number_binary }}</td>
                                    @if ($train->in_time === 1)
                                        <td> E in orario</td>
                                    @else
                                        <td> E in ritardo</td>
                                    @endif


                                </tr>
                            </tbody>
                        </table>
                    </div>


                </div>
            @empty
                <h2>Sorry, i havan't ticket!! 😭😭😭</h2>
            @endforelse
        </div>
    </div>
@endsection
