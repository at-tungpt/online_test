@extends ('layouts.template_admin')
@section ('main-content')
<section class="content-header">
    <h1>{!! trans('label_trans.new_media') !!}</h1>
</section>
<div class="content">
    <div class="box box-primary">
        <div class="box-body">
            <div class="row">
                {!! Form::open(array('route' => 'media.store', 'method'=>'POST','enctype' => 'multipart/form-data', 'class' => 'basic-grey')) !!} 
                <div class="col-sm-12">
                <div class="user-left">
                    <!-- Name Field -->
                    <p class="form-group">
                        {!! Form::label('name', trans('label_trans.name')) !!}
                       <br>
                        {!! Form::input('text', 'name', null , ['class' => 'form-control']) !!}
                    </p>
                    <!-- Title Field -->
                    <p class="form-group">
                        {!! Form::label('title', trans('label_trans.title')) !!}
                        <br>
                        {!! Form::input('text', 'title', null , ['class' => 'form-control']) !!}
                    </p>
                    <!-- Category Field -->
                    <p class="form-group">
                        {!! Form::label('Category', trans('label_trans.category')) !!}
                        {!! Form::select('post_category_id', $category, null, ['class' => 'form-control']) !!}

                    </p>
                    <!-- Description Field -->
                    <p class="form-group">
                        {!! Form::label('description', trans('label_trans.description')) !!}
                        <br>
                        <textarea class="ckeditor" name="description" id="" cols="65" rows="5"></textarea>
                    </p>
                    <!-- Author Field -->
                    <p class="form-group">
                        {!! Form::label('user_id', trans('label_trans.author')) !!}
                        {!! Auth::user()->name !!}
                        {!! Form::number('user_id', Auth::user()->id, ['class' => 'hidden']) !!}
                    </p>
                    </div>
                    <div class="user-left">
                     <!-- Image Field -->
                    <div class="form-group-2">
                    <p>{!! Form::label('image', trans('label_trans.image')) !!}
                    </p>
                    <p id="image-holder"></p>
                    {!! Form::file('image', array('id' => 'fileUpload')) !!}
                    </div>
                     <!-- Video Field -->
                    <p class="form-group-2">
                        {!! Form::label('video', trans('label_trans.video')) !!}
                        <br>
                        <iframe width="300" height="200" src="https://www.youtube.com/embed/?rel=0&amp;controls=0&amp;showinfo=0" frameborder="0" allowfullscreen></iframe>
                    </p>
                    </div>
                    <div class='clearfix'></div>
                    <a class="btn btn-default"  href="{!! URL::previous() !!}">{!! trans('label_trans.back') !!}</a>
                {!! Form::submit( trans('label_trans.save'), ['class' => 'btn btn-primary']) !!}
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection