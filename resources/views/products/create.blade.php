@extends('products.layout')

@section('content')
<div class="row">
  <div class="col-lg-12 margin-tb">
    <div class="pull-left">
      <h2>Add New Company</h2>
    </div>
    <div class="pull-right">
      <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
    </div>
  </div>
</div>

@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif

<form action="{{ route('products.store') }}" method="POST">
  @csrf

  <div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Name</strong>
        <input type="text" name="name" class="form-control" placeholder="Name">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <label>Status</label>
        <select class="form-control" name="status">
          @foreach($status as $row)
          <option value={{$row->name}}>{{$row->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Address</strong>
        <input type="text" name="address" class="form-control" placeholder="Address">
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
      <div class="form-group">
        <strong>Created_at</strong>
        <input placeholder="yy-mm-dd h:i:s" class="form-control col-xs-6" name="created_at" placeholder=""></input>
      </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center" style="padding-top: 5%">
      <button type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>

</form>
@endsection
