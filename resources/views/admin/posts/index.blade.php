@extends('layouts.admin')

@section('content')

<div class="container bg-info py-1">
    {{-- Posts --}}
    <!-- Titolo contenitore -->
    <h2 class="title-content">Posts</h2>
    <!-- /Titolo contenitore -->


    <table class="table bg-light py-3">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">title</th>
            <th scope="col">slug</th>
            <th scope="col">description</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post )
                <tr>
                    <th scope="row">{{$post->id}}</th>
                    <td>{{$post->title}}</td>
                    <td>{{$post->slug}}</td>
                    <td>{{$post->description}}</td>
                    <td class="d-flex">
                        <a class="btn btn-success mx-1" href="{{ route('admin.posts.show', $post) }}">SHOW</a>
                        <a class="btn btn-primary mx-1" href="{{ route('admin.posts.edit', $post) }}">EDIT</a>
                        <form class="d-inline mx-1"
                            onsubmit="return confirm('confermi l\'eliminazione di: {{ $post->title }}?')"
                            action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" >DELETE</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $posts->links() }}

</div>

@endsection
