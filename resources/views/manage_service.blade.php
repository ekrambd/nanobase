@extends('admin.admin_master')
@section('admin_content')

<div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th>  ID</th>
                                        <th class="hidden-phone">Service Title</th>
                                        <th class="hidden-phone"> Description</th>
                                        <th class="hidden-phone"> Image</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($manage_service as $row)
                                    <tr>
                                    	<td>{{$row->service_id}}</td>
                                        <td><a href="#">{{$row->service_title}}</a></td>
                                        
                                        <td>{{$row->short_description}}</td>
                                        <td>
                                         <img src="{{URL::to($row->service_image)}}" width="70px" height="70px">	
                                        </td>
                                        <td>
                                         
                                            <a href="{{URL::to('/edit-service/'.$row->service_id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                            <a href="{{URL::to('/delete-service/'.$row->service_id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="icon-trash "></i></a>
                                        </td>
                                    </tr>
                                   @endforeach 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END BASIC PORTLET-->
                    </div>
                </div>

@endsection