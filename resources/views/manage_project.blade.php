@extends('admin.admin_master')
@section('admin_content')

<div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th> ID</th>
                                       
                                        <th class="hidden-phone">Project Title</th>
                                        <th class="hidden-phone">Project Sub Title</th>
                                        <th class="hidden-phone">Project Image</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($manage_project as $row)
                                    <tr>
                                    	<td><a href="#">{{$row->project_id}}</a></td>
                                    	<td><a href="#">{{$row->product_title}}</a></td>
                                        <td><a href="#">{{$row->sub_title}}</a></td>
                                        <td><a href="#"><img src="{{URL::to($row->product_image)}}" width="60px" height="60px"></a></td>
                                       
                                        <td>
                                         
                                            <a href="{{URL::to('/edit-project/'.$row->project_id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                             <a href="{{URL::to('/delete-project/'.$row->project_id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="icon-trash "></i></a>
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