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
					  <a href="/sessions/{{ $session->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
					  <a href="#" class="btn btn-danger btn-sm"
						  onclick="
						  var result = confirm('Are you sure, You want to delete this Session???');
						  if(result){
						    event.preventDefault();
						    document.getElementById('delete-form{{$session->id}}').submit();

						  }
						  ">Delete
					  </a>
					  <form method="post" action="{{ route('sessions.destroy', [$session->id]) }}" id="delete-form{{ $session->id}}" style="display: none;">
					    <input type="hidden" name="_method" value="delete">
					    {{csrf_field()}}
					  </form>
					</div>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
@endif