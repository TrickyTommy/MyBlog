@extends('layouts.main')

@section('container')
<h1>Halaman About</h1>
<h3>{{$name}}</h3>
<p>{{ $email }}</p>
<p>tommyferdian.hadimarta@gmail.com</p>
<img src="img/<?= $image; ?>" alt="Tommy Ferdian Hadimarta" width="200" class="img-thumbnail rounded-circle">
@endsection
