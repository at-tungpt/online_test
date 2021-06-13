@extends ('layouts.template_admin')
@section ('main-content')
<section class="content-header">
    <h1>{!! trans('label_trans.detail') !!}</h1>
</section>
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                <div class="col-sm-12">
                <div class="user-left">
                    <!-- ID Field -->
                    <p class="form-group">
                        {!! Form::label('id', trans('label_trans.no')) !!}
                        {!! $detailMedia->id !!}
                    </p>
                    <!-- Name Field -->
                    <p class="form-group">
                        {!! Form::label('name', trans('label_trans.name')) !!}
                        {!! $detailMedia->name !!}
                    </p>
                    <!-- Title Field -->
                    <p class="form-group">
                        {!! Form::label('title', trans('label_trans.title')) !!}
                        {!! $detailMedia->title !!}
                    </p>
                    <!-- Description Field -->
                    <p class="form-group">
                        {!! Form::label('description', trans('label_trans.description')) !!}
                        {!! $detailMedia->description !!}
                    </p>
                    <!-- Category Field -->
                    <p class="form-group">
                        {!! Form::label('Category', trans('label_trans.category')) !!}
                        {!! $category->name !!}
                    </p>
                    <!-- Author Field -->
                    <p class="form-group">
                        {!! Form::label('Author', trans('label_trans.author')) !!}
                        {!! $user->name !!}
                    </p>
                    <!-- Created Field -->
                    <p class="form-group">
                        {!! Form::label('created_at', trans('label_trans.created_at')) !!}
                        {!! $detailMedia->created_at !!}
                    </p>
                    <!-- Update Field -->
                    <p class="form-group">
                        {!! Form::label('updated_at', trans('label_trans.updated_at')) !!}
                        {!! $detailMedia->updated_at !!}
                    </p>
                    </div>
                    <div class="user-left">
                     <!-- Avatar Field -->
                    <p class="form-group-2">
                        {!! Form::label('avatar', trans('user_trans.avatar')) !!}
                        <img src="{!! config('path.path_avatar') !!}{!! $detailMedia->image !!}" class="avatar">
                    </p>
                     <!-- Video Field -->
                    <p class="form-group-2">
                        {!! Form::label('video', trans('label_trans.video')) !!}
                        <br>
                        <iframe width="300" height="200" src="https://www.youtube.com/embed/{!! $detailMedia->video !!}?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
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