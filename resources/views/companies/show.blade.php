@extends('layouts.app')
@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">
        <div class="jumbotron">
            <h1>{{$company->name}}</h1>
            <p class="lead">{{$company->description}}</p>
            <!-- <p><a class="btn btn-lg btn-success" href="#" role="button">Get started today</a></p>-->
        </div>

        <!-- Example row of columns -->
        <div class="row w3-white">
            <a class="pull-right btn btn-default btn-sm" href="{{route('projects.create')}}">Add Project</a>
            @foreach($company->projects as $project)
                <div class="col-lg-4">
                    <h2>{{ $project->name }}</h2>
                    <p class="text-info">{{ $project->description }}</p>

                    <p><a class="btn btn-primary" href="/sobhan/public/projects/{{$project->id}}" role="button">View
                            Project »</a></p>
                </div>
            @endforeach
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
                <li><a href="{{$company->id}}/edit">Edit</a></li>
                <li><a href="projects/create">Add Project</a></li>
                <li><a href="{{route('companies.create')}}">Add New Company</a></li>
                <li><a href="{{route('companies.index')}}">viewCompany</a></li>
                <li><a href="#">
                        <a
                                href="#"
                                onclick="
                  var result = confirm('Are you sure you wish to delete this Company?');
                      if( result ){
                              event.preventDefault();
                              document.getElementById('delete-form').submit();
                      }
                          "
                        >
                            Delete
                        </a>

                        <form id="delete-form" action="{{ route('companies.destroy',[$company->id]) }}"
                              method="POST" style="display: none;">
                            <input type="hidden" name="_method" value="delete">
                            {{ csrf_field() }}
                        </form>
                    </a></li>
                {{--<li><a href="#">Add New Member</a></li>--}}
            </ol>
        </div>
        <div class="sidebar-module">
            <h4 class="w3-border-bottom w3-text-teal w3-padding">Members</h4>
            <ol class="list-unstyled w3-padding">
                <li>Comming Soon</li>
                {{--@foreach($company->users as $user)--}}
                    {{--<li><a href="#">$users->name</a></li>--}}
                {{--@endforeach--}}

            </ol>
        </div>

    </div>
@endsection