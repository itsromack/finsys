@if (Session::has('flash_message'))
<div class="ui success message">
  <i class="close icon"></i>
  <div class="header">
    <i class="icon info circle"></i>
    {{ Session::get('flash_message')}}
  </div>
</div>
@endif

@if (Session::has('flash_message_error'))
<div class="ui negative message">
  <i class="close icon"></i>
  <div class="header">
    <i class="icon info circle"></i>
    {{ Session::get('flash_message_error')}}
  </div>
</div>
@endif