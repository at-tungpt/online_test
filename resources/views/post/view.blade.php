@extends ('layouts.template_admin')

@section ('main-content')
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="clearfix"></div>
                @if(Session::has('msg'))
                    <div class="alert alert-success">
                        {{ Session::get('msg') }}
                    </div>
                @endif
                @include('post.table')
                <div class="clearfix"></div>
                {!! $postMedia->render() !!}
            </div>
        </div>
    </div>
@endsection