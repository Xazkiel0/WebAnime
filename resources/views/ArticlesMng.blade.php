@extends('layouts.crudApp')

{{-- 
    Problem in this Page {
        Layout : No css [tugas:adam]
    }
    --}}


@section('content')
<a href="{{ route('article.create') }}" class="btn btn-success">Post Article</a>
<table class="table">
    <tr>
        <th>No</th>
        <th>Title</th>
        <th>Category</th>
        <th>Photo</th>
        <th>Action</th>
    </tr>
    @foreach ($articles as $article)
    <tr>
        <td>{{$loop->iteration}}</td>
        <td>
            @foreach ($article->genre as $gnr)
            {{$gnr->name}}
            @endforeach
        </td>
        <td>{{$article->name}}</td>
        <td><img src="{{$article->myPhoto()}}" alt="" style="width: 50px"></td>
        <td>
            <a class="btn btn-primary" href="{{ route('article.edit', [$article->id]) }}">Edit</a>
            <form action="{{ url('manage/article/'.$article->id) }}" method="post">
                @method('delete')
                @csrf
                <button type="submit">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<script src="{{ asset('js/sc.js') }}"></script>

@endsection