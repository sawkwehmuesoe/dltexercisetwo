@extends('layouts.adminindex')
@section('caption','Categories List')
@section('content')
<!-- Start Page Content Area -->
        
    <div class="container-fluid">

        <div class="col-md-12">


	<a href="{{route('categories.create')}}" class="btn btn-primary btn-sm rounded-0">Create</a>

	<hr/>


<table id="mydata" class="table border table-sm table-hover border">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
                    <th>Status</th>
					<th>By</th>
                    <th>Created At</th>
                    <th>Updated At</th>
                    <th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $idx=>$category)
                <tr>
					<td>{{++$idx}}</td>
					<td><a href="{{route('categories.show',$category->id)}}">{{$category->name}}</a></td>
					<td>{{$category->status->name}}</td>
					<td>{{$category->user->name}}</td>
					<td>{{$category->created_at->format('d M Y')}}</td>
					<td>{{$category->updated_at->format('d M Y')}}</td>
					<td>
						<a href="{{route('categories.edit',$category->id)}}" class="text-info"><i class="fas fa-pen"></i></a>
						<a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>
					</td>
					<form id="formdelete-{{$idx}}" action="{{route('categories.destroy',$category->id)}}" method="POST">
						@csrf
						@method("DELETE")
					</form>
                </tr>
                @endforeach
			</tbody>
		</table>


        </div>

    </div>
                
                
         
<!-- End Page Content Area -->

@endsection

@section('scripts')
	<script type="text/javascript">
		$(document).ready(function(){
			$('.delete-btns').click(function(){
				
				var getidx = $(this).data('idx');
				// console.log(getidx);

				if(confirm(`Are you sure !!! you want to Delete ${getidx}`)){
					$('#formdelete-'+getidx).submit();
					return true;
				}else{
					return false;
				}

			});
		});
	</script>
@endsection