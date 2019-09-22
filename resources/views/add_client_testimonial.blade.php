@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Add Client Testimonial</h4>
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
                            <form action="{{URL::to('/insert-client_testimonial')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                             @csrf  
                                

                                <div class="control-group">
                                    <label class="control-label">Name</label>
                                    <div class="controls">
                                        <input type="text" name="name" placeholder="Name" class="input-large" />
                                        
                                    </div>
                                </div>

                              
                               
                               
                               
                                <div class="control-group">
                                    <label class="control-label">Location</label>
                                    <div class="controls">
                                        <input type="text" name="location" placeholder="Location" class="input-large" />
                                        
                                    </div>
                                </div> 
                               
                               

                                
                                
                                
                              
                                <div class="control-group">
                                    <label class="control-label"> Description</label>
                                    <div class="controls">
                                        <textarea class="input-xxlarge" rows="16"  cols="40" name="details"></textarea>
                                    </div>
                                </div>
                                
                                 <div class="control-group">
                                    <label class="control-label">Photo</label>
                                    <img id="image" src="#" />
                                   
                                 <input type="file"  name="photo" accept="image/*"  required onchange="readURL(this);">
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