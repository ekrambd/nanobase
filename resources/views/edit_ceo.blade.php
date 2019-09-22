@extends('admin.admin_master')
@section('admin_content')
<div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Add CEO</h4>
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
                            <form action="{{URL::to('/update-ceo/'.$edit_ceo->id)}}" class="form-horizontal" method="post" enctype="multipart/form-data">
                             @csrf  
                                <div class="control-group">
                                    <label class="control-label">CEO NAME</label>
                                    <div class="controls">
                                        <input type="text" name="ceo_name" value="{{$edit_ceo->ceo_name}}" class="input-large" />
                                        
                                    </div>
                                </div>

                                
                                
                               
                               
                               
                                
                               
                               

                                
                                
                                
                                <div class="control-group">
                                    <label class="control-label">Description</label>
                                    <div class="controls">
                                        <textarea class="input-xlarge" rows="12"   name="ceo_short_description">{{$edit_ceo->ceo_short_description}}</textarea>
                                    </div>
                                </div>
                                
                                
                                <input type="hidden" name="old_photo" value="{{ $edit_ceo->ceo_image }}">

                               <div class="control-group">
                                 <label for="exampleInputPassword12">Old Photo</label>
                                 <img src="{{ URL::to($edit_ceo->ceo_image) }}" style="height: 80px; width: 100px;">
                              </div>


                                 <div class="control-group">
                                    <label class="control-label">Image</label>
                                    <img id="image" src="#" />
                                   
                                 <input type="file"  name="ceo_image" accept="image/*"  required onchange="readURL(this);">
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