@extends('layouts.app')
@section('content')
    <ul>
        @foreach ($farms as $farm)
          <li>{{ $farm->name }}</li>
        @endforeach
    </ul>
@endsection