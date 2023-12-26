
<a href="{{ route('seatallocation.create') }}">Create</a>
<table border="1" style="width: 100%;">
    <thead>
        <tr>
            <th>SeatName</th>
            <th>SerialNo</th>

            <th>Description</th>  
            <th>Action</th>           
        </tr>
    </thead>
    <tbody>
        @if($seatallocations->count() > 0)
            @foreach($seatallocations as $seatallocation)
                <tr>
                    <td>{{ $seatallocation->SeatName }}</td>
                    <td>{{ $seatallocation->SerialNo }}</td>                   

                    <td>{{ $seatallocation->Description }}</td>                   
                    <td>
                        <a href="{{ route('seatallocation.edit', $seatallocation->id) }}">Edit</a>
                        <a href="{{ route('seatallocation.delete1', $seatallocation->id) }}">Delete</a>
                       
                       
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
</table>
