@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Employees</span>
@endsection
@section('content')
    <form method="post" action="{{ route('employees.store') }}">
        @csrf
        <div class="form-group">
            <label for="Emp_Name">Name:</label>
            <input id="Emp_Name" class="form-control" type="text" name="Emp_Name">
            <label for="Emp_Phone">Phone number:</label>
            <input id="Emp_Phone" class="form-control" type="text" name="Emp_Phone">
            <label for="Cus_Add">Address</label>
            <input id="Emp_Add" class="form-control" type="text" name="Emp_Add">
            <label for="hinhSP">Image:</label>
            <input id="Emp_Img" class="form-control" type="file" name="Emp_Img" multiple>
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
    </form>
@endsection
