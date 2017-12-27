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
					  <a href="/markstypes/{{ $markstype->id}}/edit" class="btn btn-primary btn-sm">Edit</a>
					  <a href="#"  class="btn btn-danger btn-sm"
					  	  onclick="
					  	  var result = confirm('Are you sure, You want to delete this Markstype???');
					  	  if(result){
					  	    event.preventDefault();
					  	    document.getElementById('delete-form{{$markstype->id}}').submit();

					  	  }
					  	  ">Delete
					    </a>
					    <form method="post" action="{{ route('markstypes.destroy', [$markstype->id]) }}" id="delete-form{{$markstype->id}}" style="display: none;">
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