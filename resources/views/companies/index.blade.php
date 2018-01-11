@extends('layouts.app')
@section('content')
    <div class="col-md-6 col-lg-6 col-md-offset-3 col-lg-offset-3">
        <div class="panel panel-primary ">
            <div class="panel-heading ">Company <a class="pull-right btn btn-primary btn-sm" href="{{route('companies.create')}}">New Company</a> </div>
            <div class="panel-body">

                <ul class="list-group">

                    @foreach($companies as $company)
                        <li class="list-group-item"><a href="companies/{{$company->id}}">{{$company->name}}</a></li>
                        <li class="list-group-item w3-gray w3-hover-amber">{{$company->description}}</li>

                    @endforeach


                </ul>

            </div>
        </div>
    </div>
@endsection