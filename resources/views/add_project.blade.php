@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Add Projet</h4>
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
                            <form action="{{URL::to('/insert-project')}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                             @csrf  
                                <div class="control-group">
                                    <label class="control-label">Project Title</label>
                                    <div class="controls">
                                        <input type="text" name="product_title" placeholder="Project Title" class="input-large" />
                                        
                                    </div>
                                </div>

                                
                                
                               
                                <div class="control-group">
                                    <label class="control-label">Project Sub Title</label>
                                    <div class="controls">
                                        <input type="text" name="sub_title" placeholder="Project Sub Title" class="input-large" />
                                        
                                    </div>
                                </div>
                               
                                
                               
                                 <div class="control-group">
                                    <label class="control-label">Location</label>
                                    <div class="controls">
                                        <input type="text" name="location" placeholder="Location" class="input-large" />
                                        
                                    </div>
                                </div>


                                 <div class="control-group">
                                    <label class="control-label">Square Meter</label>
                                    <div class="controls">
                                        <input type="text" name="sq_m" placeholder="Square Meter" class="input-large" />
                                        
                                    </div>
                                </div>

                                
                                 <div class="control-group">
                                    <label class="control-label">Year</label>
                                    <div class="controls">
                                        <input type="text" name="year" placeholder="Year" class="input-large" />
                                        
                                    </div>
                                </div>

                                <div class="control-group">
                                    <label class="control-label">Price Value</label>
                                    <div class="controls">
                                        <input type="text" name="price" placeholder="Price Value" class="input-large" />
                                        
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">Project Head</label>
                                    <div class="controls">
                                        <input type="text" name="head" placeholder="Project Head" class="input-large" />
                                        
                                    </div>
                                </div>
                               
                                
                                
                                 <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <img id="image" src="#" />
                                   
                                 <input type="file"  name="product_image" accept="image/*"  required onchange="readURL(this);">
                                </div>

                               <div class="control-group">
                                    <label class="control-label">Video</label>
                                    <div class="controls">
                                        <input type="text" name="video" placeholder="Insert Youtube Link here" class="input-large" />
                                        
                                    </div>
                                </div>

                                 <div class="control-group">
                                    <label class="control-label">Map</label>
                                    <div class="controls">
                                        <input type="hidden" name="map" placeholder="Insert Google map link here" class="input-large" />
                                        
                                    </div>
                                </div>

                               

                                <div class="form-actions">
                                    <button type="submit" class="btn btn-success"><i class="icon-ok"></i> Save</button>
                                    
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
@endsection