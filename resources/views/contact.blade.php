@extends('layouts.app')
@section('content')
<div class="p-3">
<h1>Contact</h1>
  <div class="contact">
    <form action="{{ route('contact.submit')}}" method="post" style="width:80%">
            {{ csrf_field() }}
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" class="form-control" spellcheck="false" placeholder="Enter name">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" class="form-control" spellcheck="false" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="email">Message</label>
              <textarea name="message" cols="5" class="form-control" spellcheck="false" placeholder="Message here"></textarea>
            </div>
            <div class="form-group">
            <input type="submit" name="submit" value="submit" class="btn btn-success btn-md">
            </div>
    </form>
  </div>
</div>
@endsection

@section('sidebar')
<div class="m-3">
@parent
</div>
@endsection
