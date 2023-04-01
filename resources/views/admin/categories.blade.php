@extends('layouts.admin')
@section('title','Categories')
@section('content')
@if ($message = Session::get('message'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ $message }}</strong>
</div>
@endif
<div class="row">
    <div class="col-lg-4">
        <form action="{{ route('category.save') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-plus"></i> Add Category
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Title</label>
                        <input type="text" name="title" class="form-control">
                        @error('title')
                        <font color="red"><b>{{ $message }}</b></font>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-danger"><i class="fa fa-save"></i> Save</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection