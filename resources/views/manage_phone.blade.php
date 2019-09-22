@extends('admin.admin_master')
@section('admin_content')

<div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th class="hidden-phone"> Phone Number</th>
                                        <th class="hidden-phone">Schedule</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($manage_phone as $row)
                                    <tr>
                                    	<td><a href="#">{{$row->phone_id}}</a></td>
                                        <td><a href="#">{{$row->phone_number}}</a></td>
                                        <td><a href="#">{{$row->schedule}}</a></td>
                                       
                                        <td>
                                         
                                            <a href="{{URL::to('/edit-phone/'.$row->phone_id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                            
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