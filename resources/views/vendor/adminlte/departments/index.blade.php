@extends('adminlte::layouts.app')

@section('htmlheader_title')
	{{ trans('adminlte_lang::message.home') }}
@endsection


@section('main-content')
	<div class="container-fluid spark-screen">
		<div class="row">
			<div class="col-md-6 col-md-offset-3">

				<div class="panel panel-primary">
				  <div class="panel-heading">View All Departments</div>
				  <div class="panel-body">

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
