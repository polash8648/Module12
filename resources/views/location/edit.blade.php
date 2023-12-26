@if(Session::has('success'))
<p class="alert">{{ Session::get('success') }}</p>
@endif
<form method="POST" action="{{route('location.update', $location->id) }}" >    
    @csrf
    <input type="text" name="Name" value="<?= (isset($location))?$location->Name:''; ?>" placeholder="Name"><br>
    <input type="text" name="Description" value="<?= (isset($location))?$location->Description:''; ?>" placeholder="Description"><br>

    <button type="submit">Update</button>
</form>