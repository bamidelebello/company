 @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">User's Information</div>

         <div class="panel-body">

    	<div class="row">
     <div class="col-md-6 col-lg-6">
       @if(session('info'))

     <div clas="alert alert-success">
        {{session('info')}}
     </div>
       @endif
     
     </div>
     </div>
     
   <form class="form-horizontal" method="Post" action="/store/form">
   	  {{csrf_field()}}
<div class="form-group">
  <label for="inputname" class="col-sm-3 control-label">Name</label>
  <div class="col-sm-9">
  	<input type="text" class="form-control" id="name" name="name">
  </div>
</div>


<div class="form-group">
  <label for="inputfirst_name" class="col-sm-3 control-label">First Name</label>
  <div class="col-sm-9">
  	<input type="text" class="form-control" id="first_name" name="first_name">
  </div>
</div>


<div class="form-group">
  <label for="inputname" class="col-sm-3 control-label">Middle Name</label>
  <div class="col-sm-9">
  	<input type="text" class="form-control" id="middle_name" name="middle_name">
  </div>
</div>

<div class="form-group"> 
  <label for="inputname" class="col-sm-3 control-label">Last Name</label>
  <div class="col-sm-9">
  	<input type="text" class="form-control" id="last_name" name="last_name">
  </div>
</div>

  <div class="form-group"> 
  <label for="inputname" class="col-sm-3 control-label">city</label>
  <div class="col-sm-9">
  	<input type="text" class="form-control" id="city" name="city">
  </div>
</div>
                    <div class="col-md-8 col-md-offset-4">
                   <button type="submit" class="btn btn-primary">Hit Up</button>
                     </div>

   </form>

   </div>
</div>
</div>
</div>
</div>
</div>










    @endsection