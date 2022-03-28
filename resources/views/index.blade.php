@extends('layouts.app')

@section('content')

<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Unity WebGL Player | Aerial Cat</title>
  <script src="Build/UnityLoader.js"></script>
  <script>
    UnityLoader.instantiate("unityContainer", "Build/Build.json");
  </script>
</head>
<body>
  <div id="unityContainer" style="width: 100%; height: 20%; margin: auto;"></div>
</body>
    
@endsection

