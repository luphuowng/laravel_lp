@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Customer</span>
@endsection
@section('content')
{{-- tạo bảng có các tên cột là: #,tên loại, thao tác --}}
<a href="{{ route('customer.create') }}" class="btn btn-primary">Add Customer</a>

<table class="table table-light text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($customer as $item)
        <tr>
            <td>{{ $item->cus_id }}</td>
            <td>{{ $item->cus_name }}</td>
            <td>{{ $item->cus_phone }}</td>
            <td>{{ $item->cus_add }}</td>
            <td>
                <a type="button" href="{{ route('ustomer.edit', ['idCus'=>$item->cus_id]) }}" class="btn btn-warning">Edit</a>
                <a type="button" onclick="checkDel()" href="{{ route('ustomer.delete', ['idCus'=>$item->cus_id]) }}" class="btn btn-danger">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    function checkDel (){
        const del = confirm("Do you want to delete?");
        if(del == true) {
            return true;
        }else {
            return false;
        }
    }
</script>

@endsection
