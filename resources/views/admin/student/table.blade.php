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
        <td>{{ $user->avatar }}</td>
        <td>
            <a href="" class="glyphicon glyphicon-pencil">{{ trans('label_trans.view')}}</a>
            <a href="" class="glyphicon glyphicon-eye-open">{{ trans('label_trans.edit')}}</a>
            <a href="" class="glyphicon glyphicon-trash">{{ trans('label_trans.delete')}}</a>
        </td>
    </tr>
    @endforeach
    </tbody>
</table>