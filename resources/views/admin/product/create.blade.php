@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Product</span>
@endsection
@section('content')
    <form method="post" action="{{ route('product.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="Pro_Name">Name Product:</label>
            <input id="Pro_Name" class="form-control" type="text" name="Pro_Name">
            <label for="Cat_Id">Type Product:</label></br>

                <label for=""></label>
                <select name="Cat_Id" id="">
                    @foreach ($category as $item)
                        <option value="{{ $item->cat_id }}">{{ $item->cat_name }}</option>
                    @endforeach
                </select></br>
            <label for="Pro_Price">Price:</label>
            <input id="Pro_Price" class="form-control" type="text" name="Pro_Price">
            <label for="Pro_Desc">Discript:</label>
            <input id="Pro_Desc" class="form-control" type="text" name="Pro_Desc">
            <label for="Pro_Img">Image:</label>
            <input id="Pro_Img" class="form-control" type="file" name="Pro_Img">
        </div>
        <button class="btn btn-primary" type="submit">Add product</button>
    </form>
@endsection
