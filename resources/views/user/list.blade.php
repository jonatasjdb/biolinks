<div>
    <div>
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    </div>
    <br>
    <table cellpadding="10" border="1">
        @foreach ($users as $user)
            <tr>
                <td>{{$user['id']}}</td>
                <td>{{$user['name']}}</td>
                <td>{{$user['email']}}</td>
            </tr>
        @endforeach
    </table>
</div>
