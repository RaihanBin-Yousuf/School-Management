@extends('admin.admin_master')
@section('admin')


<div class="content-wrapper">
	<div class="container-full">
		<!-- Content Header (Page header) -->
		<!-- Main content -->
		<section class="content">
			<div class="row">
				<div class="col-12">
					<div class="box">
						<div class="box-header with-border">
							<h3 class="box-title">User List</h3>
							<a style="float: right;" class="btn btn-rounded btn-success mb-5" data-toggle="modal"
								data-target="#modal-info"> Add User</a>
							{{-- <a style="float: right;" class="btn btn-rounded btn-success mb-5" data-toggle="modal"
								data-target="#exampleModal $user->id">add</button> --}}
						</div>
						<!-- /.box-header -->
						<div class="box-body">
							<div class="table-responsive">
								<table id="example1" class="table table-bordered table-striped">
									<thead>
										<tr>
											<th width="5%">SL</th>
											<th>Role</th>
											<th>Name</th>
											<th>Email</th>
											<th>Code</th>
											<th width="25%">Action</th>
										</tr>
									</thead>
									<tbody>
										@foreach($allData as $key => $user )
										<tr>
											<td>{{ $key+1 }}</td>
											<td> {{ $user->role }}</td>
											<td>{{ $user->name }}</td>
											<td>{{ $user->email }}</td>
											<td>{{ $user->code }}</td>
											<td>
												<a href="{{ route('users.edit',$user->id) }}"
													class="btn btn-info">Edit</a>
												<a href="{{ route('users.delete',$user->id) }}" class="btn btn-danger"
													id="delete">Delete</a>
											</td>
										</tr>
										@endforeach
									</tbody>
									<tfoot>
									</tfoot>
								</table>
							</div>
						</div>
						<!-- /.box-body -->
					</div>
					<!-- /.box -->
				</div>
				<!-- /.col -->
			</div>
			<!-- /.row -->
		</section>
		<!-- /.content -->
	</div>
</div>


<div class="modal fade bs-example-modal-lg" id="modal-info" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" style="display: none;" aria-hidden="true">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="myLargeModalLabel">Large modal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
				<h4>Overflowing text to show scroll behavior</h4>
				<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>
				<p>Aenean lacinia bibendum nulla sed consectetur. Praesent commodo cursus magna, vel scelerisque nisl consectetur et. Donec sed odio dui. Donec ullamcorper nulla non metus auctor fringilla.</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger btn-rounded text-left" data-dismiss="modal">Close</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>

{{-- <div class="modal modal-info fade" id="modal-info" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content bg-info">
			<div class="modal-header">
				<h4 class="modal-title">Info Modal</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
			</div>
			<div class="modal-body">
				<p>One fine body…</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-rounded btn-danger" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-rounded btn-primary float-right">Save changes</button>
			</div>
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div> --}}

@endsection