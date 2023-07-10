<?php $page="user-reports";?>
@extends('layouts.app')
@section('title','all-course')
	
@section('content')
	
<!-- Page Wrapper -->
			<div class="page-wrapper">
				<div class="content container-fluid content-wrap">
					
					<!-- User Reports -->
					<div class="row">
						<div class="col-sm-12">
                           
						   <div class="col-md-12 text-md-end">
							<a href="{{route('backsite.detail-mobil.create')}}" class="btn btn-primary btn-blog mb-3 text-black">Add Course</a>
						</div>
						 

							
							<div class="card">
								<div class="card-header border-bottom-0">
									<div class="row align-items-center">
										<div class="col">
											<h5 class="card-title">All Course</h5>
										</div>
										<div class="col-auto d-flex">
											<div class="form-custom me-2">
												<div id="tableSearch"  class="dataTables_wrapper"></div>
											</div>
										</div>
									</div>
								</div>
								<div class="card-body p-0">				
									<div class="table-responsive">									
										<table class="datatable table table-borderless hover-table" id="data-table">
											<thead class="thead-light">
												<tr>
												   <th class="text-center">No</th>
												   <th class="text-center">Merek Mobil</th>
                                                   <th class="text-center">Model Mobil</th>
                                                   <th class="text-center">No Plat Mobil</th>
                                                   <th class="text-center">Harga Sewa Mobil</th>
                                                   <th class="text-center">Photo</th>
												   <th class="text-center">Action</th>
												</tr>
											</thead>
											<tbody>
												@php $no=0 @endphp
												@forelse ($mobil as $key => $mobils)
												@php $no++ @endphp

												<tr>
													<td class="text-center">{{ $no }}</td>
													<td class="text-center">{{ $mobils->merek_mobil }}</td>
													<td class="text-center">{{ $mobils->model_mobil }}</td>
													<td class="text-center">{{ $mobils->no_plat }}</td>
													<td class="text-center">Rp. {{ $mobils->price_mobil }}</td>
													<td class="text-center">
                                                        @if ($mobils->photo)
                                                        <img src="{{ asset('storage/assets-admin/images/file-mobil/'.$mobils->photo) }}" style="height: 50px; width: 50px">
                                                        @else
                                                        <span>No Image Found</span>
                                                        @endif
                                                    </td>

													<td class="text-center">
														<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Action</button>
														<div class="dropdown-menu">		
															@method('delete')
															<a href="{{ route('backsite.detail-mobil.destroy', $mobils->id) }}" class="btn btn-sm dropdown-item" data-confirm-delete="true"><i class="feather-trash-2 me-1"></i>Delete</a>
															
														</div>
													</td>
												</tr>
												@empty
													
												@endforelse
											
											</tbody>
										</table>
									</div>
								</div>
							</div>
							
                            {{-- {{ $course->links() }} --}}
						</div>
					</div>
					<!-- /User Reports -->
				</div>
			</div>
			<!-- /Page Wrapper -->
		</div>
		<!-- /Main Wrapper -->
@endsection