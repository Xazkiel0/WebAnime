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
<script src="{{ asset('js/ckeditor.js') }}"></script>
<script>
    ClassicEditor.create(document.querySelector('#editor'), {
        toolbar: {
            items: [
                "heading",
                "|",
                "CKFinder",
                "bold",
                "italic",
                "link",
                "bulletedList",
                "numberedList",
                "alignment",
                "|",
                "fontFamily",
                "fontColor",
                "fontSize",
                "indent",
                "outdent",
                "|",
                "imageUpload",
                "blockQuote",
                "insertTable",
                "mediaEmbed",
                "undo",
                "redo",
                "code",
                "specialCharacters"
            ]
        },
        language: "id",
        image: {
            toolbar: ["imageTextAlternative", "imageStyle:full", "imageStyle:side"]
        },
        table: {
            contentToolbar: ["tableColumn", "tableRow", "mergeTableCells"]
        },
        licenseKey: ""
    })
    .then(editor => {
        window.editor = editor;
        console.log(window.editor);
    })
    .catch(error => {
        console.error(error);
    });
</script>
@endsection