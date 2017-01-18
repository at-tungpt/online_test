@extends ('layouts.template_admin')
@section ('main-content')
<section class="content-header">
    <h1>{!! trans('user_trans.edit_profile') !!}</h1>
</section>
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::model($user, ['route' => ['user.update', $user->id], 'method' => 'patch', 'files' => true]) !!}
                @if ($errors->any())
                <ul class="alert alert-danger">
                    @foreach ($errors->all() as $message)
                    <li>{{ $message }}</li>
                    @endforeach
                </ul>
                @endif
                <!-- Name Field -->
                <p class="form-group">
                    {!! Form::label('name', trans('user_trans.name')) !!}
                    {!! Form::text('name', null , ['class' => 'form-control']) !!}
                </p>
                <!-- Email Field -->
                <p class="form-group">
                    {!! Form::label('email', trans('user_trans.email')) !!}
                    {!! Form::text('email', null , ['class' => 'form-control', 'readonly']) !!}
                </p>
                <!-- Avatar Field -->
                <p class="form-group">
                    {!! Form::label('avatar', trans('user_trans.avatar')) !!}
                </p>
                <p class="form-group">
                    @if(!empty(Auth::user()->avatar))
                    <img src="{{ config('path.path_avatar')}}/{{Auth::user()->avatar }}" class="img-circle avatar" id="output">
                    @else
                    <img src="{{ config('path.path_avatar')}}/avatar-default.png" class="img-circle avatar" id="output">
                    @endif
                    {!! Form::file('avatar', array('id' => 'load-avatar')) !!}
                </p>
                <!-- Gender Field -->
                <p class="form-group ">
                    {!! Form::label('gender', trans('user_trans.gender')) !!}
                </p>
                <p class="form-group">
                    <span>{!! trans('user_trans.male') !!}</span>
                    {!! Form::radio('gender', '1', true, array('class' => 'name')) !!}
                </p>
                <p class="form-group">
                    <span>{!! trans('user_trans.female') !!}</span>
                    {!! Form::radio('gender', '2', null, array('class' => 'name')) !!}
                </p>
                <p class="form-group">
                    <span>{!! trans('user_trans.other') !!}</span>
                    {!! Form::radio('gender', '3', null, array('class' => 'name')) !!}
                </p>
            </div>
            <div class="clearfix"></div>
            <!-- Birthday Field -->
             <p class="form-group">
                {!! Form::label('dob', trans('user_trans.birthday')) !!}
                {!! Form::date('dob', null , ['class' => 'form-control']) !!}
            </p>
            <!-- Phone Field -->
             <p class="form-group">
                {!! Form::label('phone', trans('user_trans.number_phone')) !!}
                {!! Form::text('phone', null , ['class' => 'form-control']) !!}
            </p>
            <div class="clearfix"></div>
            <div class="content">
                <div class="box box-primary">
                    <div class="form-group col-sm-12">
                        {!! Form::label('old-password', trans('user_trans.change_password')) !!}
                    </div>
                    <div class="form-group col-sm-4">
                        {!! Form::label('old-password', trans('user_trans.old_password')) !!}
                        {!! Form::password('old-password', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group col-sm-4">
                        {!! Form::label('password', trans('user_trans.new_password')) !!}
                        {!! Form::password('password', ['class'=>'form-control', 'id' => 'reset-password']) !!}
                    </div>
                    <div class="form-group col-sm-6">
                        {!! Form::checkbox('show-password', 1, null, ['id' => 'show-password']) !!}{!! trans('user_trans.show_password') !!}
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            @if (Auth::user()->role_id == Config::get('constants.ROLEUSER'))
            <div class="content">
                <div class="box box-primary">
                    <div class="form-group col-sm-12">
                        {!! Form::label('register-business', trans('user.register_business')) !!}
                    </div>
                    <div class="form-register-business">
                        <input type="checkbox" name="role_id" id="fancy-checkbox-primary" autocomplete="off" />
                        <div class="[ btn-group ]">
                            <label for="fancy-checkbox-primary" class="[ btn btn-primary ]">
                                <span class="[ glyphicon glyphicon-ok ]"></span>
                                <span> </span>
                            </label>
                            <label for="fancy-checkbox-primary" class="[ btn btn-default active ]">
                                {!! trans('user.register_business') !!}
                            </label>
                        </div>
                    </div>
                    {!! Form::label('register-business', trans('business.infor_register_business')) !!}
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="clearfix"></div>
            @endif
            <!-- Submit Field -->
            <div class="form-group col-sm-12">
                {!! Form::submit( trans('label_trans.save'), ['class' => 'btn btn-primary']) !!}
                <a href="{{ url('/user') }}" class="btn btn-default">{!!  trans('label_trans.back') !!}</a>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
</div>
@endsection