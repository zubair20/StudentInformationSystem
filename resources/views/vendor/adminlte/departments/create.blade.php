@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="panel panel-primary">
				  <div class="panel-heading">Add Department Here</div>
				  <div class="panel-body">
				    <div class="row">
				    	<div class="col-xs-12">
				    		<form method="post" action="{{ route('departments.store') }}">
				    			{{csrf_field()}}
				    			<div class="row">
				    				<div class="col-xs-9">
				    					<div class="form-group">
				    					  <input type="text" name="name" class="form-control" id="name" placeholder="Add Department" autofocus value="{{old('name')}}">
				    					</div>
				    				</div>
				    				<div class="col-xs-2 col-xs-offset-1">
				    					<div class="form-group pull-right">
				    						<button type="submit" class="btn btn-success">Add Department</button>
				    					</div>
				    				</div>
				    			</div>
				    		</form>
				    	</div>
				    </div><br>

				    <div class="row">
				    	<div class="col-xs-12">
				    		@include('adminlte::partials.department-data')
				    	</div>
				    </div>
				  </div>
				</div>

			</div>
		</div>
	</div>
@endsection
