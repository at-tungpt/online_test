@extends('layouts.header')
<div class="container">
    <div class="info">
        <h1>{{ trans('login_trans.slogan') }}</h1>
    </div>
</div>
<div class="form">
    <div class="thumbnail"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/169963/hat.svg"/></div>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
        {{ csrf_field() }}
        <input id="email" type="email" class="form-control" name="email" placeholder="Email address" value="{{ old('email') }}" required autofocus>
        <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
        <button>{{ trans('login_trans.login') }}</button>
        <p class="message"><a href="{{ url('/password/reset') }}">{{ trans('login_trans.forgetten') }}</a></p>
        <p class="message">{{ trans('login_trans.already_registered') }}<a href="{{ url('/register') }}">{{ trans('login_trans.register') }}</a></p>
    </form>
    <div class="social-login">
    <label for="">{!! trans('login_trans.social_network') !!}</label>
        <a href="{{url('redirect')}}" class="fb"><i class="fa fa-facebook"></i></a>
        <a href="{{url('redirect/twitter')}}" class="tw"><i class="fa fa-twitter"></i></a>
        <a href="{{url('redirect/google')}}" class="gp"><i class="fa fa-google-plus"></i></a>
      </div>
</div>
@extends('layouts.footer')