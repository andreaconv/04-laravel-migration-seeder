@extends('layout.main')

@section('content')

  <div class="container py-5">

    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Codice Treno</th>
          <th scope="col">Azienda</th>
          <th scope="col">Stazione Partenza</th>
          <th scope="col">Stazione Arrivo</th>
          <th scope="col">Orario Partenza</th>
          <th scope="col">Orario Arrivo</th>
          <th scope="col">Numero Carrozze</th>
          <th scope="col">Puntuale</th>
          <th scope="col">Cancellato</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($trains as $train)
          <tr>
            <th scope="row">{{ $train->codice_treno}}</th>
            <td>{{ $train->azienda }}</td>
            <td>{{ $train->stazione_partenza }}</td>
            <td>{{ $train->stazione_arrivo }}</td>
            <td>{{ $train->orario_partenza }}</td>
            <td>{{ $train->orario_arrivo }}</td>
            <td>{{ $train->numero_carrozze }}</td>
            <td>{{ $train->puntuale }}</td>
            <td>{{ $train->cancellato }}</td>
          </tr>
        @endforeach

      </tbody>
    </table>

  </div>

@endsection
