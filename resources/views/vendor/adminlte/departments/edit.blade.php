@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-primary">
				  <div class="panel-heading">Update Department Here</div>
				  <div class="panel-body">
				    <div class="row">
				    	<div class="col-xs-12">
				    		<form method="post" action="{{ route('departments.update', [$department->id]) }}">
				    			<input type="hidden" name="_method" value="put">
				    			<input type="hidden" name="id" value="{{$department->id}}">
				    			{{ csrf_field()}}
				    			<div class="row">
				    				<div class="col-xs-9">
				    					<div class="form-group">
				    					  <input type="text" name="name" class="form-control" id="name" placeholder="Update Department" value="{{$department->name}}" autofocus  >
				    					</div>
				    				</div>
				    				<div class="col-xs-2 col-xs-offset-1">
				    					<div class="form-group pull-right">
				    						<input type="submit" class="btn btn-success" value="Update Department">
				    					</div>
				    				</div>
				    			</div>
				    		</form>
				    	</div>
				    </div><br>
				  </div>
				</div>

			</div>
		</div>
	</div>
@endsection
