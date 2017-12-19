@if (count($markstypes)<=0)
	<h2 style="text-align: center;">No Marks Type Found</h2>
@else
	<table class="table table-striped table-bordered table-hover">
		<thead>
			<tr>
				<th width="30%">Sr#</th>
				<th>Marks Type</th>
				<th width="30%">Action</th>
			</tr>
		</thead>
		<tbody>
		@foreach ($markstypes as $markstype)
			<tr>
				<td>{{$markstype->id}}</td>
				<td>{{$markstype->name}}</td>
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