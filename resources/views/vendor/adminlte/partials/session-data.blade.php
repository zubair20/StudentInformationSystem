@if (count($sessions)<=0)
	<h2 style="text-align: center;">No Session Found</h2>
@else
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th width="30%">Sr#</th>
				<th>Session Name</th>
				<th width="30%">Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($sessions as $session)
			<tr>
				<td>{{ $session->id}}</td>
				<td>{{ $session->name}}</td>
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