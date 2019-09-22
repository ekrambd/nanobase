@extends('admin.admin_master')
@section('admin_content')

<div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th> Address ID</th>
                                        <th class="hidden-phone"> Address Title</th>
                                        <th class="hidden-phone"> Address Details</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($manage_address as $row)
                                    <tr>
                                    	<td><a href="#">{{$row->address_id}}</a></td>
                                        <td><a href="#">{{$row->address_title}}</a></td>
                                        <td><a href="#">{{$row->address_details}}</a></td>
                                       
                                        <td>
                                         
                                            <a href="{{URL::to('/edit-address/'.$row->address_id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                           
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