@extends('admin.admin_master')
@section('admin_content')

<div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th>  ID</th>
                                        <th class="hidden-phone">CEO Name</th>

                                        <th class="hidden-phone">CEO  Photo</th>
                                         <th class="hidden-phone">Short Description</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($manage_ceo as $row)
                                    <tr>
                                    	<td>{{$row->id}}</td>
                                        <td><a href="#">{{$row->ceo_name}}</a></td>
                                        
                                        <td>{{$row->ceo_short_description}}</td>
                                        <td>
                                         <img src="{{URL::to($row->ceo_image)}}" width="70px" height="70px">	
                                        </td>
                                        <td>
                                         
                                            <a href="{{URL::to('/edit-ceo/'.$row->id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                           
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