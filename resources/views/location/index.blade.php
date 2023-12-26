
<a href="{{ route('location.create') }}">Create</a>
<table border="1" style="width: 100%;">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>  
            <th>Action</th>           
        </tr>
    </thead>
    <tbody>
        @if($locations->count() > 0)
            @foreach($locations as $location)
                <tr>
                    <td>{{ $location->Name }}</td>
                    <td>{{ $location->Description }}</td>                   
                    <td>
                        <a href="{{ route('location.edit', $location->id) }}">Edit</a>
                        <a href="{{ route('location.delete1', $location->id) }}">Delete</a>
                       
                        <!-- <form action="{{ route('location.delete', $location->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <button type="submit">Delete</button>
                        </form> -->
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
