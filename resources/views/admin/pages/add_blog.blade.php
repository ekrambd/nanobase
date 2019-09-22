@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Add Blog</h4>
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
                            <form action="{{URL::to('/insert-blog')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                             @csrf  
                                <div class="control-group">
                                    <label class="control-label">Author</label>
                                    <div class="controls">
                                        <input type="text" name="author_name" value="{{Session::get('admin_name')}}" class="input-large" />
                                        
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Blog Title</label>
                                    <div class="controls">
                                        <input type="text" name="blog_title" placeholder="Blog Title" class="input-large" />
                                        
                                    </div>
                                </div>

                              
                               
                               
                               
                                
                               
                               

                                
                                
                                
                                <div class="control-group">
                                    <label class="control-label">Short Description</label>
                                    <div class="controls">
                                        <textarea class="input-xlarge" rows="14"  cols="45"  name="blog_short_description"></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Long Description</label>
                                    <div class="controls">
                                        <textarea class="input-xxlarge" rows="16"  cols="40" name="blog_long_description"></textarea>
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label">Blog Image</label>
                                    <img id="image" src="#" />
                                   
                                 <input type="file"  name="blog_image" accept="image/*"  required onchange="readURL(this);">
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
                                    <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Save</button>
                                    <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
@endsection