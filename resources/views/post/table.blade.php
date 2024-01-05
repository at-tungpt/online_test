<table border="1px">
    <thead>
        <th class="no">{{ trans('label_trans.no')}}</th>
        <th>{{ trans('label_trans.name') }}</th>
        <th>{{ trans('label_trans.title')}}</th>
        <th class="action">{{ trans('label_trans.action')}}</th>
    </thead>
    <tbody>
    @foreach($postMedia as $post)
    <tr>
        <td class="id">{{ $post->id }}</td>
        <td>{{ $post->name }}</td>
        <td class="title-media">{{ str_limit($post->title, 100) }}</td>
        <td class="action-user">
           
            <a href="{{ route('detail-media',[$post->id]) }}" ><i class="glyphicon glyphicon-eye-open"></i><i class="hover-detail">{{ trans('label_trans.detail')}}</i></a>
            <a href="{{ route('detail-media',[$post->id]) }}" ><i class=" glyphicon fa fa-edit"></i><i class="hover-detail">{{ trans('label_trans.edit')}}</i></a>
            <a href="{{ route('media-delete', [$post->id]) }}" alt="{{ trans('notification_trans.are_you_sure_delete_user') }}" class="delete-user" ><i class="glyphicon glyphicon-trash"></i><i class="hover-delete">{{ trans('label_trans.delete')}}</i></a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>