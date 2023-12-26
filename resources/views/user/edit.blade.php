@if(Session::has('success'))
<p class="alert">{{ Session::get('success') }}</p>
@endif
<form method="POST" action="{{route('user.update', $user->id) }}" >    
    @csrf
    <input type="text" name="Name" value="<?= (isset($user))?$user->Name:''; ?>" placeholder="Name"><br>
    <input type="text" name="Email" value="<?= (isset($user))?$user->Email:''; ?>" placeholder="Email"><br>
    <input type="text" name="UserId" value="<?= (isset($user))?$user->UserId:''; ?>" placeholder="UserId"><br>
    <input type="text" name="Password" value="<?= (isset($user))?$user->Password:''; ?>" placeholder="Password"><br>
    <input type="text" name="MobileNo" value="<?= (isset($user))?$user->MobileNo:''; ?>" placeholder="MobileNo"><br>
  
    <button type="submit">Update</button>
</form>