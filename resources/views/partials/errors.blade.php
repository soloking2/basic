@if(count($errors) > 0)
<div class="alert alert-danger alert-dismissable fade show">
  <button type="button" class="close" aria-label="close" data-dismiss="alert">
    <span aria-hidden="true">&times;</span>
  </button>
  @foreach($errors->all() as $error)
    <li><strong>{!! $error !!}</strong></li>
  @endforeach
</div>
@endif
