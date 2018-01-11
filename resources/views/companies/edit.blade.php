@extends('layouts.app')
@section('content')

    <div class="col-md-9 col-lg-9 col-sm-9 pull-left">

        <div class="row ">
            <form method="post" action="{{ route('companies.update',$company->id) }}">
                {{csrf_field()}}
                <input name="_method" value="put" type="hidden">
                <div class="form-group">
                    <label for="company-name">Name<span class="required">*</span></label>
                    <input placeholder="Enter_name"
                           id="company-name"
                           required
                           name="name"
                           spellcheck="false"
                           class="form-control"
                           value="{{$company->name}}"
                    >
                </div>
                <div class="form-group">
                    <label for="company-content">Discription<span class="required">*</span></label>
                    <textarea placeholder="Enter_Description"
                              id="company-content"
                              style="resize: vertical"
                              required
                              name="description"
                              rows="S" spellcheck="false"
                              class="form-control text-left"
                              value="{{$company->description}}"
                    ></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary">
                </div>

            </form>
        </div>

    </div>
    <div class="col-sm-3 col-md-3 col-lg-3 pull-right">

        <div class="sidebar-module">
            <h4>Action</h4>
            <ol class="list-unstyled">
                <li><a href="/sobhan/public/companies">list Companies</a></li>
                <li><a href="#">Delete</a></li>
                <li><a href="#">Add New Member</a></li>
            </ol>
        </div>
        <div class="sidebar-module">
            <h4>Members</h4>
            <ol class="list-unstyled">
                <li><a href="#">March 2014</a></li>

            </ol>
        </div>

    </div>
@endsection