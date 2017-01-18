<table>
    <thead>
        <th>No.</th>
        <th>Fullname</th>
        <th>Email</th>
        <th>Birthday</th>
        <th>Role</th>
        <th>Action</th>
    </thead>
    <tbody>
    @foreach($user as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name}}</td>
        <td class="email">{{ $user->email}}</td>
        <td>{{ $user->birthday}}</td>
        <td class="role">
            @if ($user->role_id == config('define.ROLEADMIN'))
            Admin
            @elseif ($user->role_id == config('define.ROLETEACHER'))
            Teacher
            @else
            Student
            @endif
        </td>
        <td>
            <a href="" class="glyphicon glyphicon-pencil">Edit</a>
            <a href="" class="glyphicon glyphicon-eye-open">View</a>
            <a href="" class="glyphicon glyphicon-trash">Delete</a>
            

        </td>
    </tr>
    @endforeach
    </tbody>
</table>