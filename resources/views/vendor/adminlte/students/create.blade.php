@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-xs-12 ">

				<div class="panel panel-primary">
				  <div class="panel-heading">Add Student Here</div>
				  <form action="{{ route('students.store') }}" method="post">
				  	{{csrf_field()}}
					  <div class="panel-body">
					  	<div class="row">
					  		<div class="col-xs-12 col-sm-6">
					  			<div class="form-group">
								    <label for="first_name" >First Name</label>
								    <input type="text" name="first_name" class="form-control" id="first_name" placeholder="Enter First Name" value="{{old('first_name')}}">
								</div>
								<div class="form-group">
								    <label for="last_name">Last Name</label>
								    <input type="text" name="last_name" class="form-control" id="last_name" placeholder="Enter Last Name" value="{{old('last_name')}}">
								</div>
								<div class="form-group">
								    <label for="contact">Contact No</label>
								    <input type="text" name="contact" class="form-control" id="contact" placeholder="Enter Contact No" value="{{old('contact')}}">
								</div>
								<div class="form-group">
								    <label for="email">Email</label>
								    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Email" value="{{old('email')}}">
								</div>
								<div class="form-group">
								    <label for="password">Password</label>
								    <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
								</div>
					  		</div>
					  		<div class="col-xs-12 col-sm-6">
					  			<div class="form-group">
								    <label for="reg">Registration</label>
								    <input type="text" name="reg" class="form-control" id="reg" placeholder="Enter Registration" value="{{old('reg')}}">
								</div>
					  			<div class="form-group">
								    <label for="session">Select Session</label>
								    <select name="session" id="session" class="form-control">
							    	@if (count($sessions)>0)
							    		<option value="">Select Session</option>
							    		@foreach ($sessions as $session)
							    			<option value="{{$session->id}}" {{old('session')==$session->id ? 'selected' : '' }}>{{$session->name}}</option>
							    		@endforeach
							    	@else
							    		<option value="">Add Session first</option>
							    	@endif
								    </select>
								</div>
								<div class="form-group">
								    <label for="department">Select Department</label>
								    <select name="department" id="department" class="form-control">
								    @if (count($departments))
								    	<option value="">Select Department</option>
								    	@foreach ($departments as $department)
								    		<option value="{{$department->id}}" {{old('department')==$department->id ? 'selected' : '' }}>{{$department->name}}</option>
								    	@endforeach
								    @else
								    	<option value="">Add Department first</option>
								    @endif
								    	
								    </select>
								</div>
								<div class="form-group">
								    <label for="semester">Select Semester</label>
								    <select name="semester" id="semester" class="form-control" >
								    @if (count($semester)>0)
								    	<option value="">Select Semester</option>
								    	<option selected="" value="{{$semester->id}}">{{$semester->name}}</option>
								    @else
								    	<option value="">Add Semester first</option>
								    @endif
								    	
								    </select>
								</div>
								<div class="form-group">
									<label for="gender">Select Gender</label>
								</div>
								<div class="form-group" style="margin-left: -25px;">
							        <div class="radio-inline">
							          <label>
							            <input type="radio" name="gender" id="optionsRadios1" value="male" checked="" {{old('gender')=='male'? 'checked' : '' }}>
							            Male
							          </label>
							        </div>
							        <div class="radio-inline">
							          <label>
							            <input type="radio" name="gender" id="optionsRadios2" value="female" {{old('gender')=='female'? 'checked' : '' }}>
							            Female
							          </label>
							        </div>
							    </div>
					  		</div>
					  	</div>
					  	<div class="row">
					  		<div class="col-xs-12">
					  			<div class="form-group">
								    <label for="address">Address</label>
								    <textarea name="address" id="address" cols="10" rows="5" placeholder="Enter Address" class="form-control"></textarea>
								</div>
					  		</div>
					  		<div class="col-xs-12">
					  			<div class="form-group">
					  				<input type="submit" value="Add Student" class="btn btn-success">
					  			</div>
					  		</div>
					  	</div>
					  </div>
				  </form>
				</div>

			</div>
		</div>
	</div>
@endsection
