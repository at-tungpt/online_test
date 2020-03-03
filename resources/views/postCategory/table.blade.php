<table id="example1" class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>{!! trans('label_trans.name')!!}</th>
      <th>{!! trans('label_trans.action') !!}</th>
    </tr>
  </thead>
  <tbody class="table-content">
    @if (!empty($postCategories))
      @foreach ($postCategories as $postCategories)
      <tr class="table-tr">
          <td class="table-td">
              <a href="">{!! str_limit(strip_tags($postCategories->name), 50) !!}</a>
          </td >
          <td class="table-td">
                <a href=""><i class="glyphicon glyphicon-pencil"></i>{{ trans('label_trans.edit')}}</a>
                <a href="" alt="{{ trans('notification_trans.are_you_sure_delete_category') }}" class="delete-user" ><i class="glyphicon glyphicon-trash"></i>{{ trans('label_trans.delete')}}</a>
          </td>
      </tr>
      @endforeach
    @endif
  </tbody>
</table>
