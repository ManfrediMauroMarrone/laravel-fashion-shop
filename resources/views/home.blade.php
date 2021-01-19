@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Larabel Fashion Shop</h1>
    <ul>
      @foreach ($dresses as $dress)
        <li>
          <p>Colore: {{ $dress->colore }}</p>
          <p>Taglia: {{ $dress->taglia }}</p>
          <p>Tessuto: {{ $dress->tessuto }}</p>

        </li>

      @endforeach
    </ul>

  </div>

@endsection
