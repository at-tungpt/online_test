@extends ('layouts.template_admin')
@section ('main-content')
<section class="content-header">
    <h1>{!! trans('label_trans.information') !!}</h1>
</section>
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-12">
                <div class="user-left">
                    <!-- Name Field -->
                    <p class="form-group">
                        {!! Form::label('name', trans('user_trans.name')) !!}
                        {!! $user->name !!}
                    </p>
                    <!-- Emai Field -->
                    <p class="form-group">
                        {!! Form::label('email', trans('user_trans.email')) !!}
                        {!! $user->email !!}
                    </p>
                    <!-- Gender Field -->
                    <p class="form-group">
                        {!! Form::label('gender', trans('user_trans.gender')) !!}
                        @if ($user['gender'] == config('define.MALE'))
                        {!! trans('user_trans.male') !!}
                        @elseif ($user['gender'] == 'label_trans.FEMALE')
                        {!! trans('user_trans.female') !!}
                        @else
                        {!! trans('user_trans.other') !!}
                        @endif
                    </p>
                    <!-- Birthday Field -->
                    <p class="form-group">
                        {!! Form::label('birthday', trans('user_trans.birthday')) !!}
                        {!! $user->birthday !!}
                    </p>
                    <!-- Phone Field -->
                    <p class="form-group">
                        {!! Form::label('phone', trans('user_trans.number_phone')) !!}
                        {!! $user->number_phone !!}
                    </p>
                    <!-- Created Field -->
                    <p class="form-group">
                        {!! Form::label('created_at', trans('label_trans.created_at')) !!}
                        {!! $user->created_at !!}
                    </p>
                    <!-- Update Field -->
                    <p class="form-group">
                        {!! Form::label('updated_at', trans('label_trans.updated_at')) !!}
                        {!! $user->updated_at !!}
                    </p>
                    <!-- Status Field -->
                    <p class="form-group">
                        {!! Form::label('status', trans('user_trans.status')) !!}
                        @if ($user->status == config('define.ACTIVATE'))
                        {!! trans('user_trans.activate') !!}
                        @else
                        {!! trans('user_trans.disabled') !!}
                        @endif
                    </p>
                    </div>
                    <div class="user-left">
                     <!-- Avatar Field -->
                    <p class="form-group-2">
                        {!! Form::label('avatar', trans('user_trans.avatar')) !!}
                        <img src="{!! config('path.path_avatar') !!}{!! $user->avatar !!}" class="avatar">
                    </p>
                    </div>
                    <div class='clearfix'></div>
                    <a class="btn btn-default"  href="{!! URL::previous() !!}">{!! trans('label_trans.back') !!}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection