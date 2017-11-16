 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            @if(count($errors)>0)
            @foreach($errors->all() as $error)
            <div class="alert alert-danger">{{$error}}</div>
              @endforeach
            @endif

            @if(session('info'))
              <div class="alert alert-success">
                 {{session('info')}}
              </div>
            @endif
            <div class="panel panel-primary">
                <div class="panel-heading">Profile Details</div>
         <div class="panel-body">
   <form class="form-horizontal" method="Post" action="{{url('/addProfile')}}" enctype="multipart/form-data">
   	  {{csrf_field()}}
<div class="form-group">
  <label for="inputname" class="col-sm-3 control-label">Enter Name</label>
  <div class="col-sm-9">
  	<input type="text" class="form-control" id="name" name="name" required>
  </div>
</div>


<div class="form-group">
  <label for="inputfirst_name" class="col-sm-3 control-label">Enter First Name</label>
  <div class="col-sm-9">
  	<input type="text" class="form-control" id="first_name" name="first_name" required>
  </div>
</div>

<div class="form-group"> 
  <label for="inputname" class="col-sm-3 control-label">Enter Last Name</label>
  <div class="col-sm-9">
  	<input type="text" class="form-control" id="last_name" name="last_name" required>
  </div>
</div>


<div class="form-group">
  <label for="inputdesignation" class="col-sm-3 control-label">Enter Designation</label>
  <div class="col-sm-9">
     <input type="text" name="designation"  class="form-control" id="designation" required>
  </div>
</div>


  <div class="form-group"> 
  <label for="inputname" class="col-sm-3 control-label">Enter city</label>
  <div class="col-sm-9">
    <input type="text" class="form-control" id="city" name="city"  required>
  </div>
</div>


<div class="form-group">
  <label for="inputdesignation" class="col-sm-3 control-label">Profile Picture</label>
  <div class="col-sm-9">
    <input type="file" class="form-control" id="profile_pic" name="profile_pic" required>
  </div>
</div>


                    <div class="col-md-8 col-md-offset-4">
                   <button type="submit" class="btn btn-primary btn-lg button-block">Add Profile</button>
                     </div>

   </form>

   </div>
</div>
</div>
</div>
</div>
</div>
    @endsection