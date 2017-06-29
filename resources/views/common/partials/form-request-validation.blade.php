@if ($errors->any())
<div class="ui error message">
    <i class="close icon"></i>
    <div class="header">
        Please fix the following problems
    </div>
    <ul class="list">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@endif