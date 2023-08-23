@extends('layout.layout')

@section('content')

<div class="row">
</div>
<div class="row">
    <div class="col-lg-12">
        <form method="POST" action="login">
            <div class="form-group">
                <label class="form-label">Username</label>
                <input class="form-control" type="text" name="username" />
            </div>
            <div class="form-group">
                <label class="form-label">Password</label>
                <input class="form-control" type="password" name="password" />
                <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            </div>
            <div class="form-group">
                <input type="submit" value="login" class="btn btn-primary" />
            </div>
        </form>
    </div>
</div>

@endsection