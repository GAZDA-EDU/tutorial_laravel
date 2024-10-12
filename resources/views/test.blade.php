
@foreach ($posts as $post)
    <h1> {{$post->body}} </h1>
    <a href="{{ url('edit_post' . '/' . $post->id) }}">Edit</a>
    <a href="{{ url('delete_post' . '/' . $post->id) }}">Delete</a>
@endforeach
