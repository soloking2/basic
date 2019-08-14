@extends('layouts.app')

@section('content')
<div class="container">
  <h1>Messages</h1>
  <ul class="list-group">
    @if(count($message) > 0)
    @foreach($message as $messages)
    <div class="p-2">
      <li class="list-group-item">{{ $messages->name}}</li>
      <li class="list-group-item">{{ $messages->email}}</li>
      <li class="list-group-item">{{ $messages->message}}</li>
    </div>
    @endforeach
    @endif
  </ul>
</div>

@endsection
