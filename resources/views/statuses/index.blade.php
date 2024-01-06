@extends('layouts.adminindex')
@section('caption','Statuses List')
@section('content')
<!-- Start Page Content Area -->
        
    <div class="container-fluid">

        <div class="col-md-12">
            <form action="{{route('statuses.store')}}" method="POST">

                {{csrf_field()}}

                <div class="row align-items-end">

                    <div class="col-md-6">
                        <label for="name">Name <span class="text-danger">*</span></label>
                        <input type="text" name="name"  id="name" class="form-control form-control-sm rounded-0" placeholder="Enter Status Name..." value="{{old('name')}}" />
                    </div>
                
                    <div class='col-md-6 mt-3'>
                        <button type="reset" class="btn btn-secondary btn-sm rounded-0 ms-3">Cancel</button>
                        <button type="submit" class="btn btn-primary btn-sm rounded-0 ms-3">Submit</button>
                     </div>
                
                
                </div>
                    
            </form>
        </div>    

        <hr/>

        <div class="col-md-12">

            <table id="mydata" class="table border table-sm table-hover border">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>By</th>
                        <th>Created At</th>
                        <th>Updated At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($statuses as $idx=>$status)
                    <tr>
                        <td>{{++$idx}}</td>
                        <td>{{$status->name}}</td>
                        <td>{{$status->user['name']}}</td>
                        <td>{{$status->created_at->format('d M Y')}}</td>
                        <td>{{$status->updated_at->format('d M Y')}}</td>
                        <td>
                            <a href="javascript:void(0);" class="text-infod editform" data-bs-toggle="modal" data-bs-target="#editmodal" data-id="{{$status->id}}" data-name="{{$status->name}}" ><i class="fas fa-pen"></i></a>
                            <a href="#" class="text-danger ms-2 delete-btns" data-idx="{{$idx}}"><i class="fas fa-trash-alt"></i></a>
                        </td>
                        <form id="formdelete-{{$idx}}" action="{{route('statuses.destroy',$status->id)}}" method="POST">
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

{{-- Start Modal Area  --}}

    {{-- start edit modal --}}
        <div id="editmodal" class="modal fades">
            <div class="modal-dialog modal-sm modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Edit Form</h6>
                        <button type="text" class="btn-close" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body">
                        <form id="formaction" action="" method="POST">

                            {{csrf_field()}}
                            {{method_field('PUT')}}
            
                            <div class="row align-items-end">
            
                                <div class="col-md-8">
                                    <label for="editname">Name <span class="text-danger">*</span></label>
                                    <input type="text" name="name"  id="editname" class="form-control form-control-sm rounded-0" placeholder="Enter Status Name..." value="{{old('name')}}" />
                                </div>
                            
                                <div class='col-md-4 mt-2'>
                                    <button type="submit" class="btn btn-primary btn-sm rounded-0">Update</button>
                                 </div>
                            
                            
                            </div>
                                
                        </form>
                    </div>
                    <div class="modal-footer">

                    </div>
                </div>
            </div>
        </div>
    {{-- end edit modal --}}

{{-- End Modal Area  --}}

@endsection

@section('scripts')
	<script type="text/javascript">



        $(document).ready(function(){

            // Start Delete Item 
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

            // End Delete Item 

            // Start Edit Form 

            $(document).on('click','.editform',function(e){

                // console.log("hey");
                // console.log($(this).attr('data-id'),$(this).data('name'));

                $("#editname").val($(this).data('name'));

                const getid = $(this).data('id');
                $('#formaction').attr('action',`/statuses/${getid}`);

                e.preventDefault();

            });

            // End Edit Form 
		});

        

	</script>
@endsection