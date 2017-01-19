<table>
    <thead>
        <th>{{ trans('label_trans.no')}}</th>
        <th>{{ trans('label_trans.fullname')}}</th>
        <th>{{ trans('label_trans.email')}}</th>
        <th>{{ trans('label_trans.birthday')}}</th>
        <th>{{ trans('label_trans.avatar')}}<th>
        <th>{{ trans('label_trans.action')}}</th>
    </thead>
    <tbody>
    @foreach($user as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td class="email">{{ $user->email }}</td>
        <td>{{ $user->birthday }}</td>
        <td><img src="{{ config('path.path_avatar') }}{{ $user->avatar }}" alt="" class="image"></td>
        <td>
            @if ( $user->role_id == config('define.ROLESTUDENT'))
            <a href="{{ route('admin-showstudent', [$user->id]) }}" class="glyphicon glyphicon-eye-open">{{ trans('label_trans.view')}}</a>
            @elseif ($user->role_id == config('define.ROLETEACHER'))
             <a href="{{ route('admin-showteacher', [$user->id]) }}" class="glyphicon glyphicon-eye-open">{{ trans('label_trans.view')}}</a>
            @endif
            <a href="" class="glyphicon glyphicon-pencil">{{ trans('label_trans.edit')}}</a>
            <a href="{{ route('admin-delete', [$user->id]) }}" class="glyphicon glyphicon-trash">{{ trans('label_trans.delete')}}</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>