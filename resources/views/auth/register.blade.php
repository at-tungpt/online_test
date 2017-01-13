@extends('layouts.header')
<div class="container">
    <div class="info">
        <h1>{{ trans('login_trans.slogan') }}</h1>
    </div>
</div>
<div class="form">
    <div class="thumbnail"><img src="{{asset('/images/hat.svg')}}"/></div>
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
        {{ csrf_field() }}
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Fullname" required autofocus>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email address" required>
        <input id="password" type="password" class="form-control" name="password" placeholder="Password" required>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" required>
        <button type="submit" class="btn btn-primary">
        {{ trans('login_trans.register') }}
        </button>
    </form>
</div>
@extends('layouts.footer')