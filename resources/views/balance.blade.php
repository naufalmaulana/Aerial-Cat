@extends('layouts.app')

@section('content')

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Unity WebGL Player | Aerial Cat</title>
  <link rel="stylesheet" href="{{asset('css/balance.css')}}">
</head>
<body>
  {{-- <div id="unityContainer" style="width: 100%; height: 20%; margin: auto;"></div> --}}
    <div class="page-container">
        <center>
            <div class="btn-container">
                <button class="btn-bl" id="50balance">Rp. 50.000</button>
                <button class="btn-bl" id="100balance">Rp. 100.000</button>
                <button class="btn-bl" id="250balance">Rp. 250.000</button>
                <button class="btn-bl" id="500balance">Rp.500.000</button>
                <button class="btn-bl" id="1000balance">Rp.1000.000</button>
            </div>
        </center>
    </div>
</body>
    
@endsection

