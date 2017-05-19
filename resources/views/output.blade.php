@extends("layout.layouts")

@section("content")

    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>recordID</th>
            <th>recordName</th>
            <th>created_at</th>
            <th>updated_at</th>
        </tr>
        </thead>
        <tbody>
        @foreach($posts as $post)
            <tr>
                <td>{{ $post->recordID }}</td>
                <td>{{ $post->recordText }}</td>
                <td>{{ $post->created_at }}</td>
                <td>{{ $post->updated_at }}</td>
            </tr>
        @endforeach
        </tbody>
        {!! $posts->links() !!}
    </table>

@endsection