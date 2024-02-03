@extends('layouts.app')
@section('content')
<div class="row pt-5">
    <p style="text-align:center ;color:gray">Home / My Account</p>
    
 </div>
<div class="container  base_bg py-5 text-white">
   

<div class=" row justify-content-center pt-3">
    <div class="col-md-8 offset-md-4">
        <div class="panel panel-default">
            <h3 >Register</h3>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                       

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email Address" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                       

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                       

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">

                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <button type="submit" class="btn btn-warning">
                                <i class="fa fa-btn fa-user"></i> Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
