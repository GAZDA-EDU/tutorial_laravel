@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ url('posts') }}">
    @csrf
    <label> Title </label>
    <input type="text" name="title">

    <label> Body </label>
    <input type="text" name="body">

    <button type="submit"> Submit </button>

</form>
