<form method="POST" action="{{ url('update_post' . '/' . $post->id) }}">
    @csrf
    <label> Title </label>
    <input type="text" name="title">

    <label> Body </label>
    <input type="text" name="body">

    <button type="submit"> Submit </button>

</form>
