@extends('admin.admin_master')
@section('admin_content')

<div class="widget-body">
                                <table class="table table-striped table-bordered table-advance table-hover">
                                    <thead>
                                    <tr>
                                        <th> Category Name</th>
                                        <th class="hidden-phone"> Publication Status</th>
                                        <th class="hidden-phone"> Publish/Unpublish</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                  @foreach($all_category as $v_category)
                                    <tr>
                                        <td><a href="#">{{$v_category->category_title}}</a></td>
                                        
                                        <td>{{$v_category->publication_status}}</td>
                                        <td>
                                         @if($v_category->publication_status == 1)
                                          <p>Publish</p>
                                         @else
                                          <p>Unpublish</p>
                                         @endif	
                                        </td>
                                        <td>
                                          @if($v_category->publication_status == 1)
                                            <a href="{{URL::to('/unpublished_category/'.$v_category->category_id)}}" class="btn btn-danger"><i class="icon-thumbs-down"></i></a>
                                         @else
                                            <a href="{{URL::to('/published_category/'.$v_category->category_id)}}" class="btn btn-success"><i class="icon-thumbs-up"></i></a>
                                         @endif
                                            <a href="{{URL::to('/edit-category/'.$v_category->category_id)}}" class="btn btn-primary"><i class="icon-pencil"></i></a>
                                            <a href="{{URL::to('/delete-category/'.$v_category->category_id)}}" class="btn btn-danger" onclick="return checkDelete()"><i class="icon-trash "></i></a>
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