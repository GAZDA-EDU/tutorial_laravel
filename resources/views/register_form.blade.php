<form method="POST" action="{{ url('register') }}">
    @csrf

    <label> Name </label>
    <input type="text" name="name">

    <label> Email </label>
    <input type="text" name="email">

    <label> Password </label>
    <input type="text" name="password">

    <button type="submit"> Submit </button>

</form>
