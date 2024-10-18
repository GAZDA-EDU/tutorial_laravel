<form method="POST" action="{{ url('login') }}">
    @csrf
    <label> Email </label>
    <input type="text" name="email">

    <label> Password </label>
    <input type="text" name="password">

    <button type="submit"> Submit </button>

</form>
