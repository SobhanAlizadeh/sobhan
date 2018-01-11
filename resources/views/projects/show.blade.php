@extends('layouts.app')
@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <div class="well well-lg">
            <h1>{{$project->name}}</h1>
            <div class="well well-lg w3-white">
                {{$project->description}}
            </div>

        </div>


        <div class="row">
            <br>
            {{--Save Data For Comment--}}
            <div class="col-md-12 col-lg-12 col-sm-12 pull-left">
                <div class="well well-lg">
                    <form method="post" action="{{ route('comments.store') }}">
                        {{ csrf_field() }}

                        <input type="hidden" value="app\Project" name="commentable_type">
                        <input type="hidden" value="{{ $project->id }}" name="commentable_id">
                        <div class="form-group">
                            <label for="comment-content">Comment</label>
                            <textarea placeholder="Enter comment"
                                      {{--style="resize: vertical"--}}
                                      id="comment-content"
                                      name="body"
                                      rows="4" spellcheck="true"
                                      class="form-control autosize-target text-left">


                                          </textarea>
                        </div>
                        <div class="form-group ">
                            <label for="comment-name">Url<span class="required">*</span></label>
                            <input type="url" placeholder="Enter URL"
                                   id="comment-name"
                                   required
                                   name="url"

                                   class="form-control"
                            >
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary"
                                   value="Submit"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- Retrive From Comment Model--}}
        <div class="row">
            <div class="col-md-12  col-sm-12  col-xs-12 col-lg-12 ">

                <!-- Fluid width widget -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-comment"></span> 
                            Recent Comments
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul class="media-list">
                            @foreach($comments as $comment)
                            <li class="media">
                                <div class="media-left">
                                    <img src="http://placehold.it/60x60" class="img-circle">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        {{$comment->user->first_name}}  {{$comment->user->last_name}} <br>
                                        <small>{{$comment->user->email}}</small>
                                        <br>
                                        <small>
                                            created at : {{$comment->created_at}}
                                        </small>
                                    </h4>
                                    <p>
                                        {{$comment->body}}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                        {{--<a href="#" class="btn btn-default btn-block">More Events »</a>--}}
                    </div>
                </div>
                <!-- End fluid width widget -->

            </div>
        </div>





    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">
        <!--<div class="sidebar-module sidebar-module-inset">
            <h4>About</h4>
            <p>Etiam porta <em>sem malesuada magna</em> mollis euismod. Cras mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.</p>
        </div>-->
        <div class="sidebar-module">
            <h4 class="w3-border-bottom w3-text-teal w3-padding">Action</h4>
            <ol class="list-unstyled w3-padding">
                <li><a href="{{$project->id}}/edit">Edit Project : {{$project->name}}</a></li>
                <li><a href="{{route('projects.create')}}">Add Project</a></li>
                <li><a href="{{route('projects.index')}}">view project</a></li>
                @if($project->user_id==Auth::user()->id)
                    <li><a href="#">
                            <a
                                    href="#"
                                    onclick="
                  var result = confirm('Are you sure you wish to delete this project?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                            >
                                Delete
                            </a>

                            <form id="delete-form" action="{{ route('projects.destroy',[$project->id]) }}"
                                  method="POST" style="display: none;">
                                <input type="hidden" name="_method" value="delete">
                                {{ csrf_field() }}
                            </form>
                        </a></li>
                @endif
                {{--<li><a href="#">Add New Member</a></li>--}}
            </ol>
        </div>
        <div class="sidebar-module">
            <h4 class="w3-border-bottom w3-text-teal w3-padding">Members</h4>
            <ol class="list-unstyled w3-padding">
                <li>Comming Soon</li>
                {{--@foreach($project->users as $user)--}}
                {{--<li><a href="#">$users->name</a></li>--}}
                {{--@endforeach--}}

            </ol>
        </div>

    </div>
@endsection