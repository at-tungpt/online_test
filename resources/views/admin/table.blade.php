<table>
    <thead>
        <th class="no">{{ trans('label_trans.no')}}</th>
        <th>{{ trans('label_trans.fullname')}}</th>
        <th>{{ trans('label_trans.email')}}</th>
        <th>{{ trans('label_trans.birthday')}}</th>
        <th class="title-image">{{ trans('label_trans.avatar')}}</th>
        <th class="action">{{ trans('label_trans.action')}}</th>
    </thead>
    <tbody>
    @foreach($user as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td class="email">{{ $user->email }}</td>
        <td>{{ $user->birthday }}</td>
        <td><img src="{{ config('path.path_avatar') }}{{ $user->avatar }}" alt="" class="image"></td>
        <td class="action-user">
            @if ( $user->role_id == config('define.ROLESTUDENT'))
            <a href="{{ route('admin-showstudent', [$user->id]) }}" class="glyphicon glyphicon-eye-open">{{ trans('label_trans.detail')}}</a>
            @elseif ($user->role_id == config('define.ROLETEACHER'))
             <a href="{{ route('admin-showteacher', [$user->id]) }}" class="glyphicon glyphicon-eye-open">{{ trans('label_trans.detail')}}</a>
            @endif
            @if ( $user->role_id == config('define.ROLESTUDENT'))
            @if ($user->status == config('define.DISABLED') )
            <a href="{{ route('student-block', [$user->id]) }}" class="fa fa-unlock">{{ trans('label_trans.unlock')}}</a>
            @else
            <a href="{{ route('student-block', [$user->id]) }}" class="fa fa-lock">{{ trans('label_trans.lock')}}</a>
            @endif
            @endif
            @if ( $user->role_id == config('define.ROLETEACHER'))
            @if ($user->status == config('define.DISABLED') )
            <a href="{{ route('teacher-block', [$user->id]) }}" class="fa fa-unlock">{{ trans('label_trans.unlock')}}</a>
            @else
            <a href="{{ route('teacher-block', [$user->id]) }}" class="fa fa-lock">{{ trans('label_trans.lock')}}</a>
            @endif
            @endif
            <a href="{{ route('admin-delete', [$user->id]) }}" alt="{{ trans('notification_trans.are_you_sure_delete_user') }}" class="delete-user" ><i class="glyphicon glyphicon-trash"></i>{{ trans('label_trans.delete')}}</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>