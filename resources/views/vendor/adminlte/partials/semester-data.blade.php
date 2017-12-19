@if (count($semesters)<=0)
	<h2 style="text-align: center;">No Semester Found</h2>
@else
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th width="30%">Sr#</th>
				<th>Semester Name</th>
				<th width="30%">Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($semesters as $semester)
			<tr>
				<td>{{$semester->id}}</td>
				<td>{{$semester->name}}</td>
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