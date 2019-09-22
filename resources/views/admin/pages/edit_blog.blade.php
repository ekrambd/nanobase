@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Update Blog</h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">

                        	<h3 align="center" style="color: green">
                               <?php  
                                 $message=Session::get('message');
                                  if($message){
                                 echo $message;
                               Session::put('message',null);
                                 }
                                 ?>
                            </h3>
                            <!-- BEGIN FORM-->
                            <form action="{{URL::to('/update-blog/'.$edit_blog->blog_id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                             @csrf  
                                <div class="control-group">
                                    <label class="control-label">Author</label>
                                    <div class="controls">
                                        <input type="text" name="author_name" value="{{$edit_blog->author_name}}" class="input-large" />
                                        
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Blog Title</label>
                                    <div class="controls">
                                        <input type="text" name="blog_title" value="{{$edit_blog->blog_title}}" class="input-large" />
                                        
                                    </div>
                                </div>

                             
                               
                               
                               
                                
                               
                               

                                
                                
                                
                                <div class="control-group">
                                    <label class="control-label">Short Description</label>
                                    <div class="controls">
                                        <textarea class="input-xlarge" rows="3" name="blog_short_description">{{$edit_blog->blog_short_description}}</textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Long Description</label>
                                    <div class="controls">
                                        <textarea class="input-xxlarge" rows="3" name="blog_long_description">{{$edit_blog->blog_long_description}}</textarea>
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label">Blog Image</label>
                                    <img id="image" src="#" />
                                   
                                 <input type="file"  name="blog_image" accept="image/*"   onchange="readURL(this);">
                                </div>

                               <input type="hidden" name="old_photo" value="{{ $edit_blog->blog_image }}">

                               <div class="control-group">
                                 <label for="exampleInputPassword12">Old Photo</label>
                                 <img src="{{ URL::to($edit_blog->blog_image) }}" style="height: 80px; width: 100px;">
                              </div>  

                              <div class="control-group">
                                    <label class="control-label">Publication Status</label>
                                    <div class="controls">
                                        <select class="input-large m-wrap" name="publication_status" tabindex="1">
                                            <option value="1">Publish</option>
                                            <option value="0">Unpublish</option>
                                           
                                        </select>
                                    </div>
                                </div>           
                   
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Update</button>
                                    
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
@endsection