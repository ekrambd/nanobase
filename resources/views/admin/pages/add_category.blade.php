@extends('admin.admin_master')
@section('admin_content')

<div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>Add Category</h4>
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
                            <form action="{{URL::to('/insert-category')}}" class="form-horizontal" method="post">
                              @csrf 
                               <div class="control-group">
                                    <label class="control-label">Category Title</label>
                                    <div class="controls">
                                        <input type="text" name="category_title" placeholder="Category" class="input-large" />
                                        
                                    </div>
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
                                    
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>


@endsection