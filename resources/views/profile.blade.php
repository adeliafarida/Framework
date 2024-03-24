<h1>{{$mata}}</h1> 
     <p> nama : {{$nama}}</p>
     <p> nim  : {{$nim}}</p>
     <p> kelas: {{$kelas}}</p>
     <p> asal : {{$asal}} </p>
     <p> asal : {{$greeting}} </p>
@foreach($greeting as $greet)
     <p> awalan : {{$greet ['awalan']}}</p>
     <p> keuntungan : {{$greet ['keuntungan']}} </p>
     <p> keberuntungan : {{$greet ['keberuntungan']}} </p>
     <p> sikap : {{$greet ['sikap']}} </p>

     @endforeach
     