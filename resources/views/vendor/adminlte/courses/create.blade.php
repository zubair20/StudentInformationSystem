@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-xs-12 ">
				<div class="panel panel-primary">
				  <div class="panel-heading">Add Course Here</div>
				  <div class="panel-body">
				  	<div class="row">
				  		<div class="col-xs-12 col-sm-6">
				  			<div class="form-group">
							    <label for="cname">Course Name</label>
							    <input type="text" class="form-control" id="cname" placeholder="Enter First Name">
							</div>
							<div class="form-group">
							    <label for="credit-hour">Select Session</label>
							    <select name="credit-hour" id="credit-hour" class="form-control">
							    	<option value="">Select Credit Hour</option>
							    	<option value="">1</option>
							    	<option value="">2</option>
							    	<option value="">3</option>
							    	<option value="">4</option>
							    </select>
							</div>
							
				  		</div>
				  		<div class="col-xs-12 col-sm-6">
				  			<div class="form-group">
							    <label for="department">Select Department</label>
							    <select name="department" id="department" class="form-control">
							    	<option value="">Select Department</option>
							    	<option value="">BCS</option>
							    	<option value="">BEE</option>
							    </select>
							</div>
							<div class="form-group">
							    <label for="semester">Select Semester</label>
							    <select name="semester" id="semester" class="form-control">
							    	<option value="">Select Semester</option>
							    	<option value="">1st</option>
							    	<option value="">2nd</option>
							    </select>
							</div>
				  		</div>
				  	</div>
				  	<div class="row">
				  		<div class="col-xs-12">
				  			<div class="form-group">
				  				<input type="submit" value="Add Course" class="btn btn-success">
				  			</div>
				  		</div>
				  	</div>
<!--
				    <div class="row">
				    	<div class="col-xs-12">
				    		<table class="table table-striped table-bordered table-hover">
				    			<thead>
				    				<tr>
				    					<th width="30%">Sr#</th>
				    					<th>Department Name</th>
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
				    </div>-->
				  </div>
				</div>

			</div>
		</div>
	</div>
@endsection
