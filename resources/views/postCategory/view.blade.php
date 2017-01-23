@extends ('layouts.template_admin')

@section ('main-content')

  @if(Session::has('msg'))
      <div class="alert alert-success">
          {{ Session::get('msg') }}
      </div>
  @endif
  <div class="row">
    <div class="col-md-4">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-blue">
          <!-- /.widget-user-image -->
          <h3 class="widget-user-username">{!! trans('label_trans.category_root')!!}</h3>
          <h5 class="widget-user-desc">{!! trans('label_trans.category_children')!!}</h5>
        </div>
        <div class="box-footer no-padding">
          <div class="box">
            <div class="box-body">

                @if (!empty($postCategory))
                  @include('postCategory.table')
                @endif
            </div>
            <!-- /.end box-body -->
          </div>
          <!-- /.end box -->
        </div>
      </div>
    </div>
    <!-- /.col -->

    <div class="col-md-8">
      <!-- Widget: user widget style 1 -->
      <div class="box box-widget widget-user-2">
        <!-- Add the bg color to the header using any of the bg-* classes -->
        <div class="widget-user-header bg-black">
          <!-- /.widget-user-image -->
          <h3 class="widget-user-username">{!! trans('label_trans.category_root') !!}</h3>
          <h5 class="widget-user-desc">{!! trans('label_trans.category_children')!!}</h5>
        </div>
        <div class="box-footer no-padding">
          <div class="box">
            <div class="box-body">
            </div>
            <!-- /.end box-body -->
          </div>
          <!-- /.end box -->
        </div>
      </div>
    </div>
    <!-- /.col -->
</div>
@endsection
