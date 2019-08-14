@extends('layouts.app')

@section('contents')
  @include('partials.showcase')
@endsection
@section('content')
<div class="p-3">
<h1>Welcome to Basic Website</h1>
<p>Copyright (c) 2018 Copyright Holder All Rights Reserved.</p>
</div>
@endsection

@section('sidebar')
@parent
<p class="p-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
@endsection
