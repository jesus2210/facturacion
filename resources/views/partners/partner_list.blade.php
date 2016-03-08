@extends('base')
@section('content')
<div class="panel panel-default">
  <div class="panel-body">
    Basic panel example
  </div>
@foreach ($result as $resu)
    <p>{{ $resu->name }}</p>
@endforeach

</div>
@endsection
