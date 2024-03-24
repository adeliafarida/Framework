@extends('layouts.main')
@section('content')
@foreach($listobat as $obat)
<div class="card" style="width: 18rem;">
  <img src="..." class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">{{$obat['name']}}</h5>
    <p class="card-text">{{$obat['keterangan']}}</p>
    <a href="obat/{{$obat ['id']}}" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
@endforeach
@endsection
