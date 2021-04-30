@extends('admin.template.master')
@section('page-header-name')
    <span style="color:forestgreen">Customer</span>
@endsection
@section('content')
    <form method="post" action="{{ route('ustomer.update') }}">
        @csrf
        <input type="text" value="{{ $cus->cus_id }}" hidden name="idCus">
        <div class="form-group">
            <label for="cus_name">Name customer:</label>
            <input id="cus_name" class="form-control" type="text" value="{{ $cus->cus_name }}" name="cus_name">
        </div>
        <div class="form-group">
            <label for="cus_phone">Phone number:</label>
            <input id="cus_phone" class="form-control" type="text" value="{{ $cus->cus_phone }}" name="cus_phone">
        </div>
        <div class="form-group">
            <label for="cus_add">Address:</label>
            <input id="cus_add" class="form-control" type="text" value="{{ $cus->cus_add }}" name="cus_add">
        </div>
        <button class="btn btn-primary" type="submit">Update</button>
    </form>
@endsection
