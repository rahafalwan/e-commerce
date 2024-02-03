@extends('layouts.app')
@section('content')
<div class="row pt-5">
    <p style="text-align:center ;color:gray">Home / My Account</p>
    
 </div>
<div class="container  base_bg py-5 text-white">
   

<div class=" row justify-content-center pt-3">
    <div class="col-md-8 offset-md-4">
        <div class="panel panel-default">
            <h3 >Login</h3>
            <div class="panel-body">
                <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        

                        <div class="col-md-6 pt-3">
                            <input id="email" type="email" class="form-control" name="email" placeholder="Email Address *" value="{{ old('email') }}">

                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                      

                        <div class="col-md-6 pt-3">
                            <input id="password" type="password" class="form-control"  placeholder="Password *"  name="password">

                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4 pt-3">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" name="remember"> Remember Me
                                </label>
                            </div>
                        </div>
                    </div>

                    <div class="form-group pt-3">
                        <div class="col-md-6 col-md-offset-4 pt-3">
                            <button type="submit" class="btn btn-outline-warning">
                                <i class="fa fa-btn fa-sign-in"></i> Login
                            </button>

                            <a class="btn btn-link" style="font-size: 12pt"  href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection

