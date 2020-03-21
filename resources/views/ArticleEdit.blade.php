@extends('layouts.crudApp')

@section('content')
<div class="col">
    <div class="row">
        <form action="{{ route('article.update', [$article->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')
            {{-- <span>{{ $article->category->name }}</span>
            <ul>
                @foreach ($article->genre as $gnr)
                <li>{{ $gnr->name }}</li>
                @endforeach
            </ul>
            <input type="text" name="name" id="" class="form-control" value="{{$article->name}}">
            <img src="{{$article->myPhoto()}}" alt="" width="400">
            <input type="file" name="photo" id="">
            <textarea type="text" name="Content" id="editor" class="form-control">{{ $article->Content }}</textarea>
            --}}
            <div id="editor">

            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
</div>
@endsection
@section('bot')
<script src="{{ asset('ck/build/ckeditor.js') }}"></script>
<script src="">

</script>
@endsection