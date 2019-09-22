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
                                        <th class="hidden-phone">Messege</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($all_contact as $row)
                                    <tr>
                                    	<td>{{$row->contact_id}}</td>
                                    	<td><a href="#">{{$row->contact_name}}</a></td>
                                        <td><a href="#">{{$row->contact_email}}</a></td>
                                        <td><a href="#">{{$row->contact_phone}}</a></td>
                                       <td><a href="#">{{$row->msg}}</a></td>
                                        <td>
                                         
                                            <a href="{{URL::to('/delete-contact/'.$row->contact_id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="icon-trash "></i></a>
                                            
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