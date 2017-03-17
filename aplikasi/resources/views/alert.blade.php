@if(Session::has('message'))
<div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
    <strong><span class="glyphicon glyphicon-ok"></span></strong> {!! session('message') !!}
</div>
@endif

@if(count($errors) > 0)
<div class="alert alert-danger">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true" style="color: #fff;">&times;</span></button>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif