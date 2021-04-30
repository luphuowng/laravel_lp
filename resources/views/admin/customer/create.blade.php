@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Customer</span>
@endsection
@section('content')
    <form method="post" action="{{ route('customer.store') }}">
        @csrf
        <div class="form-group">
            <label for="Cus_Name">Name:</label>
            <input id="Cus_Name" class="form-control" type="text" name="Cus_Name">
            <label for="Cus_Phone">Phone number:</label>
            <input id="Cus_Phone" class="form-control" type="text" name="Cus_Phone">
            <label for="Cus_Add">Address</label>
            <input id="Cus_Add" class="form-control" type="text" name="Cus_Add">
        </div>
        <button class="btn btn-primary" type="submit">Add</button>
    </form>
@endsection
