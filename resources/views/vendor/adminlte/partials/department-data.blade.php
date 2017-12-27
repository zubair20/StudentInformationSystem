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
					  <a href="/departments/{{ $department->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
					    <a href="#"  class="btn btn-danger btn-sm"
					  	  onclick="
					  	  var result = confirm('Are you sure, You want to delete this Department???');
					  	  if(result){
					  	    event.preventDefault();
					  	    document.getElementById('delete-form{{$department->id}}').submit();

					  	  }
					  	  ">Delete
					    </a>
					    <form method="post" action="{{ route('departments.destroy', [$department->id]) }}" id="delete-form{{ $department->id}}" style="display: none;">
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