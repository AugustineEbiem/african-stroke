@if (count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dissmissible">
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
<div class="alert alert-success alert-dissmissible">
    {{session('success')}}
</div>
@endif


@if (session('error'))
<div class="alert alert-danger alert-dissmissible">
    {{session('error')}}
</div>
@endif
