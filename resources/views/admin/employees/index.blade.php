@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Employees</span>
@endsection
@section('content')
{{-- tạo bảng có các tên cột là: #,tên loại, thao tác --}}
<a href="{{ route('employees.create') }}" class="btn btn-primary">Add Employee</a>

<table class="table table-light text-center">
    <thead>
        <tr>
            <th>#</th>
            <th>Name Employee</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Image</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $item)
        <tr>
            <td>{{ $item->emp_id }}</td>
            <td>{{ $item->emp_name }}</td>
            <td>{{ $item->emp_phone }}</td>
            <td>{{ $item->emp_add }}</td>
            <td>{{ $item->emp_img }}</td>
            <td>
                <a type="button" href="{{ route('employees.edit', ['idEmp'=>$item->emp_id]) }}" class="btn btn-primary">Edit</a>
                <a type="button" onclick="checkDel()" href="{{ route('employees.delete', ['idEmp'=>$item->emp_id]) }}" class="btn btn-danger">Delete</a>
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
