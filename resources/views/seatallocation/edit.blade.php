@if(Session::has('success'))
<p class="alert">{{ Session::get('success') }}</p>
@endif
<form method="POST" action="{{route('seatallocation.update', $seatallocation->id) }}" >    
    @csrf
    <input type="text" name="SeatName" value="<?= (isset($seatallocation))?$seatallocation->Name:''; ?>" placeholder="SeatName"><br>
    <input type="text" name="SerialNo" value="<?= (isset($seatallocation))?$seatallocation->Description:''; ?>" placeholder="SerialNo"><br>
    <input type="text" name="Description" value="<?= (isset($seatallocation))?$seatallocation->Description:''; ?>" placeholder="Description"><br>


    <button type="submit">Update</button>
</form>