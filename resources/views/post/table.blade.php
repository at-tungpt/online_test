<table border="1px">
    <thead>
        <th class="no">{{ trans('label_trans.no')}}</th>
        <th>{{ trans('label_trans.name') }}</th>
        <th>{{ trans('label_trans.title')}}</th>
        <th>{{ trans('label_trans.description')}}</th>
        <th class="action">{{ trans('label_trans.action')}}</th>
    </thead>
    <tbody>
    @foreach($postMedia as $post)
    <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->name }}</td>
        <td>{{ str_limit($post->title, 50) }}</td>
        <td>{{ str_limit($post->description, 50) }}</td>
        <td class="action-user">
           
            <a href="" class="glyphicon glyphicon-eye-open">{{ trans('label_trans.detail')}}</a>
            <a href="" alt="{{ trans('notification_trans.are_you_sure_delete_user') }}" class="delete-user" ><i class="glyphicon glyphicon-trash"></i>{{ trans('label_trans.delete')}}</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>