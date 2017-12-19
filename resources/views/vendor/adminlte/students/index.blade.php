@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="panel panel-primary">
				  <div class="panel-heading">View All Students</div>
				  <div class="panel-body">

				    <div class="row">
				    	<div class="col-xs-12">
				    		<table class="table table-striped table-bordered table-hover">
				    			<thead>
				    				<tr>
				    					<th width="30%">Sr#</th>
				    					<th>Student Name</th>
				    					<th width="30%">Action</th>
				    				</tr>
				    			</thead>
				    			<tbody>
				    				<tr>
				    					<td>1</td>
				    					<td>BCS</td>
				    					<td>
				    						<div class="btn-group" role="group" aria-label="...">
				    						  <button type="button" class="btn btn-primary btn-sm">Edit</button>
				    						  <button type="button" class="btn btn-danger btn-sm">Delete</button>
				    						</div>
				    					</td>
				    				</tr>
				    				<tr>
				    					<td>2</td>
				    					<td>EEE</td>
				    					<td>
				    						<div class="btn-group" role="group" aria-label="...">
				    						  <button type="button" class="btn btn-primary btn-sm">Edit</button>
				    						  <button type="button" class="btn btn-danger btn-sm">Delete</button>
				    						</div>
				    					</td>
				    				</tr>
				    				<tr>
				    					<td>3</td>
				    					<td>BTN</td>
				    					<td>
				    						<div class="btn-group" role="group" aria-label="...">
				    						  <button type="button" class="btn btn-primary btn-sm">Edit</button>
				    						  <button type="button" class="btn btn-danger btn-sm">Delete</button>
				    						</div>
				    					</td>
				    				</tr>
				    				<tr>
				    					<td>4</td>
				    					<td>BEE</td>
				    					<td>
				    						<div class="btn-group" role="group" aria-label="...">
				    						  <button type="button" class="btn btn-primary btn-sm">Edit</button>
				    						  <button type="button" class="btn btn-danger btn-sm">Delete</button>
				    						</div>
				    					</td>
				    				</tr>
				    			</tbody>
				    		</table>
				    	</div>
				    </div>
				  </div>
				</div>

			</div>
		</div>
	</div>
@endsection
