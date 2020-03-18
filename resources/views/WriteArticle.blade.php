@extends('layouts.crudApp')


{{-- 
    Problem in this Page {
        Keyword Google: Bagaimana cara request banyak Data [tugas:ipul]
        Layout : No css [tugas:adam]
    }
    --}}

@section('content')
<form action="{{ route('article.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="title">
    <textarea name="Content" id="" cols="30" rows="10"></textarea>
    <select name="category" id="">
        <option value="1">Category</option>
        <option value="2">Category</option>
        <option value="3">Category</option>
        <option value="4">Category</option>
        <option value="5">Category</option>
        <option value="6">Category</option>
        <option value="7">Category</option>
    </select>
    <input type="file" name="photo">
    <button type="submit">Upload</button>
</form>
@endsection