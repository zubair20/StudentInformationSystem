@if (count($departments)<=0)
	<h2 style="text-align: center;">No Department Found</h2>
@else
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th width="30%">Sr#</th>
				<th>Department Name</th>
				<th width="30%">Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($departments as $department)
			<tr>
				<td>{{$department->id}}</td>
				<td>{{$department->name}}</td>
				<td>
					<div class="btn-group" role="group" aria-label="...">
					  <button type="button" class="btn btn-primary btn-sm">Edit</button>
					  <button type="button" class="btn btn-danger btn-sm">Delete</button>
					</div>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endif