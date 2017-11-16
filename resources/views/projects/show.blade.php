 @extends('layouts.app')

@section('content')
 <div class="col-md-9 col-lg-9 col-sm-9  pull-left">

      <!-- The justified navigation menu is meant for single line per list item.
           Multiple lines will require custom code not provided by Bootstrap. -->
 

      <!-- Jumbotron -->
      <div class="well well-lg">
        <h1>{{$project->name}}!</h1>
        <p class="lead">{{$project->description}}.</p>
        <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p> -->
      </div>

      <!-- Example row of coluns -->

      <div class="row" style="background: #abc;margin: 10px">

     {{--   @foreach($project->projects as $project)
        <div class="col-lg-4">
          <h2>{{$project->name}}!</h2>
          <p class="text-danger">{{$project->description}}</p>
          <p><a class="btn btn-primary" href="/projects{{$project->id}}" role="button">View Project &raquo;</a></p>
        </div>
       @endforeach--}}
      </div>
        <!-- <a href="/projects/create" class="pull-right btn btn-default btn-sm">Add project</a> -->

     <br>
    @include('partials.comment')

   <div class="row container-fluid">
   <form method="post" action="{{ route('comments.store')}}">
                    {{csrf_field()}}

    <input type="hidden" name="commentable_type" value="App\Models\Project">
    <input type="hidden" name="commentable_id" value="{{$project->id}}">

         <div class="form-group">
               <label for="comment-content">Comment</label>
               <textarea placeholder="Enter Comment" style="resize: vertical"
               id="comment-content" name="body" rows="3" spellcheck="false"
               class="form-control autosize-target text-left"></textarea>
             </div>


             <div class="form-group">
               <label for="comment-content">Proof of work done(Url/photos)</label>
               <textarea placeholder="Enter url or screenshots" style="resize: vertical"
               id="comment-content" name="url" rows="2" spellcheck="false"
               class="form-control autosize-target text-left"></textarea>
             </div>
             <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Submit">
             </div>
         </form>
         

<!--      <p><a class="btn btn-primary" href="/projects/{{$project->id}}" role="button">view Project</a></p>
      -->
        
    </div> <!-- /container -->
     </div>
     <div class="col-sm-3 col-md-3 col-lg-3 pull-right">

          <div class="sidebar-module">
            <h4>Manage Actions</h4>
            <ol class="list-unstyled">
              <li><a href="/projects/{{$project->id}}/edit">Edit</a></li>
              <li><a href="/project/create">Create new  project</a></li>
              <li><a href="/projects">My projects</a></li>
              
              <br>
            @if($project->user_id == Auth::user()->id)
            
              <li>

                <a href="#" onclick=" 
                   var result=confirm('Are you sure your wish to Delete this project?');
                   if(result){
                    event.preventDefault();
                    document.getElementById('delete-form').submit();
                   }
                ">
              Delete
            </a>
              <form id="delete-form" action="{{route('projects.destroy',[$project->id])}}" method="post" style="display: none;">
                <input type="hidden" name="_method" value="delete">
                {{csrf_field()}}
              </form>

              </li>
              @endif
             <!--  <li><a href="#">Add New Member </a></li> -->
            </ol>
          </div>

          <div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em>Every day we have plenty of opportunities to get angry, stressed or offended. But what you're doing when you indulge these negative emotions is giving something outside yourself power over your happiness. You can choose to not let little things upset you.</p>
          </div>
       <!--    <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
              <li><a href="#">March 2014</a></li>
            </ol>
          </div> -->
        </div><!-- /.blog-sidebar -->

    @endsection
