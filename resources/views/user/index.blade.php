
<a href="{{ route('user.create') }}">Create</a>
<table border="1" style="width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Email</th> 
            <th>UserId</th>  
            <th>Password</th>  
            <th>MobileNo</th>  
            <th>Action</th>           
        </tr>
    </thead>
    <tbody>
        @if($users->count() > 0)
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->Name }}</td>
                    <td>{{ $user->Email }}</td> 
                    <td>{{ $user->UserId }}</td>
                    <td>{{ $user->Password }}</td>
                    <td>{{ $user->MobileNo }}</td>                  
                    <td>
                        <a href="{{ route('user.edit', $user->id) }}">Edit</a>
                        <a href="{{ route('user.delete1', $user->id) }}">Delete</a>
                       
                      
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
