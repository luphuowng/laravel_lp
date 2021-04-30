@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Staff</span>
@endsection
@section('content')
    <form method="post" action="{{ route('Employees.update') }}">
        @csrf
        <input type="text" value="{{ $emp->emp_id }}" hidden name="idLoai">
        <div class="form-group">
            <label for="emp_name">Name employee:</label>
            <input id="emp_name" class="form-control" type="text" value="{{ $emp->emp_name }}" name="emp_name">
        </div>
        <div class="form-group">
            <label for="emp_phone">Phone number:</label>
            <input id="emp_phone" class="form-control" type="text" value="{{ $emp->emp_phone }}" name="emp_phone">
        </div>
        <div class="form-group">
            <label for="emp_add">Address:</label>
            <input id="emp_add" class="form-control" type="text" value="{{ $emp->emp_add }}" name="emp_add">
        </div>
        <div class="form-group">
            <label for="emp_img">Image:</label>
            <input id="emp_img" class="form-control" type="text" value="{{ $emp->emp_img }}" name="emp_img">
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection
