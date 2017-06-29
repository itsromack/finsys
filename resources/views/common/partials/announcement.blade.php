@if (Session::has('announcement'))
<div class="ui success message">
  <i class="close icon"></i>
  <div class="header">
    <i class="icon announcement"></i>
    {{ Session::get('announcement')}}
  </div>
</div>
@endif