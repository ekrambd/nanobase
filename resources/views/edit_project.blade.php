@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Update Projet</h4>
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
                            <form action="{{URL::to('/update-project/'.$edit_project->project_id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                             @csrf  
                                <div class="control-group">
                                    <label class="control-label">Project Title</label>
                                    <div class="controls">
                                        <input type="text" name="product_title" value="{{$edit_project->product_title}}" class="input-large" />
                                        
                                    </div>
                                </div>

                                
                                
                               
                                <div class="control-group">
                                    <label class="control-label">Project Sub Title</label>
                                    <div class="controls">
                                        <input type="text" name="sub_title" value="{{$edit_project->sub_title}}" class="input-large" />
                                        
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Location</label>
                                    <div class="controls">
                                        <input type="text" name="location" value="{{$edit_project->location}}" class="input-large" />
                                        
                                    </div>
                                </div>
                               
                                
                                <div class="control-group">
                                    <label class="control-label">Square Meter</label>
                                    <div class="controls">
                                        <input type="text" name="sq_m" value="{{$edit_project->sq_m}}" class="input-large" />
                                        
                                    </div>
                                </div>


                                <div class="control-group">
                                    <label class="control-label">Year</label>
                                    <div class="controls">
                                        <input type="text" name="year" value="{{$edit_project->year}}" class="input-large" />
                                        
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Video</label>
                                    <div class="controls">
                                        <input type="text" name="video" value="{{$edit_project->video}}" class="input-large" />
                                        
                                    </div>
                                </div>


                              <div class="control-group">
                                    <label class="control-label">Price Value</label>
                                    <div class="controls">
                                        <input type="text" name="price" value="{{$edit_project->price}}" class="input-large" />
                                        
                                    </div>
                                </div>

                               
                               

                                
                                
                                <input type="hidden" name="old_photo" value="{{ $edit_project->product_image }}">

                               <div class="control-group">
                                 <label for="exampleInputPassword12">Old Photo</label>
                                 <img src="{{ URL::to($edit_project->product_image) }}" style="height: 80px; width: 100px;">
                              </div> 
                                
                                
                                 <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <img id="image" src="#" />
                                   
                                 <input type="file"  name="product_image" accept="image/*"   onchange="readURL(this);">
                                </div>

                             
                                    
                                        <input type="hidden" name="head" value="{{$edit_project->map}}" class="input-large" />
                                        
                                    
                                

                                <div class="control-group">
                                    <label class="control-label">Project Head</label>
                                    <div class="controls">
                                        <input type="text" name="head" value="{{$edit_project->head}}" class="input-large" />
                                        
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