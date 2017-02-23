<table class="table table-bordered">   
    <tr>
        <th>Name</th>
        <th>Details</th>          
    </tr>
    @foreach ($users as $user)
    <tr>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>
    </tr>
    @endforeach
 </table>
    {!! $users->render() !!}