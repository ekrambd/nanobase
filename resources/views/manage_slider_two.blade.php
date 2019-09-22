@extends('admin.admin_master')
@section('admin_content')

<div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th> Slider ID</th>
                                        <th class="hidden-phone">Slider Title</th>
                                        <th class="hidden-phone">Slider Description</th>
                                        <th class="hidden-phone">Slider Image</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($manage_slider_two as $row)
                                    <tr>
                                    	<td>{{$row->slider_two_id}}</td>
                                        <td><a href="#">{{$row->slider_two_title}}</a></td>
                                        
                                        <td>{{$row->slider_two_description}}</td>
                                        <td>
                                         <img src="{{URL::to($row->slider_two_image)}}" width="70px" height="70px">	
                                        </td>
                                        <td>
                                         
                                            <a href="{{URL::to('/edit-slider-two/'.$row->slider_two_id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                            <a href="{{URL::to('/delete-slider-two/'.$row->slider_two_id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="icon-trash "></i></a>
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