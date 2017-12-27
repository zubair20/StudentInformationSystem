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
					  <a href="/semesters/{{ $semester->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
					  <a href="#"  class="btn btn-danger btn-sm"
					  	  onclick="
					  	  var result = confirm('Are you sure, You want to delete this Semester???');
					  	  if(result){
					  	    event.preventDefault();
					  	    document.getElementById('delete-form{{$semester->id}}').submit();

					  	  }
					  	  ">Delete
					    </a>
					    <form method="post" action="{{ route('semesters.destroy', [$semester->id]) }}" id="delete-form{{$semester->id}}" style="display: none;">
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