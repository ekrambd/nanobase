@extends('admin.admin_master')
@section('admin_content')

<div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th class="hidden-phone"> Name</th>
                                        <th class="hidden-phone">Email</th>
                                        <th class="hidden-phone">Phone Number</th>
                                        <th class="hidden-phone">Interested In</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($all_appoitment as $row)
                                    <tr>
                                    	<td>{{$row->id}}</td>
                                    	<td><a href="#">{{$row->name}}</a></td>
                                        <td><a href="#">{{$row->email}}</a></td>
                                        <td><a href="#">{{$row->phone_number}}</a></td>
                                       <td><a href="#">{{$row->service_title}}</a></td>
                                        <td>
                                         
                                            <a href="{{URL::to('/delete-appoitment/'.$row->id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="icon-trash "></i></a>
                                            
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