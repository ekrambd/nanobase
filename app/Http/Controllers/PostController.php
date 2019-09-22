<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
class PostController extends Controller
{
    public function index()
    {
    	return view('admin.pages.add_blog');
    }

    public function InsertBlog(Request $request)
    {
    	$data['author_name'] = $request->author_name;
    	$data['blog_title']  = $request->blog_title;
    
    	$data['blog_short_description'] = $request->blog_short_description;
    	$data['blog_long_description'] = $request->blog_long_description;
    	$data['publication_status'] = $request->publication_status;
    	$image = $request->file('blog_image');
    	if ($image) {
            $image_name= str_random(5);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='public/Blog/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
            if ($success) {
                $data['blog_image']=$image_url;
                $blog=DB::table('blog')
                         ->insert($data);
              if ($blog) {
                 Session::put('message', 'Blog Inserted Successfully');
                return Redirect()->back();                      
             }else{
              
                 return Redirect()->back();
             }      
                
            }else{
              return Redirect()->back();
                
            }
        }else{
              return Redirect()->back();
        }
    }

    public function ManageBlog()
    {
       $all_blog = DB::table('blog')->get();
       return view('admin.pages.all_blog', compact('all_blog'));
    }

    public function UnpublishBlog($blog_id)
    {
       DB::table('blog')
            ->where('blog_id', $blog_id)
            ->update(['publication_status' => 0]);
       return Redirect()->back();
    }

    public function PublishBlog($blog_id)
    {
        DB::table('blog')
            ->where('blog_id', $blog_id)
            ->update(['publication_status' => 1]);
       return Redirect()->back();
    }

    public function EditBlog($blog_id)
    {
       $edit_blog = DB::table('blog')
             ->where('blog_id', $blog_id)
             ->first();
       return view('admin.pages.edit_blog', compact('edit_blog'));
    }

    public function UpdateBlog(Request $request, $blog_id)
    {
        $data['author_name'] = $request->author_name;
        $data['blog_title']  = $request->blog_title;
        
        $data['blog_short_description'] = $request->blog_short_description;
        $data['blog_long_description'] = $request->blog_long_description;
        $data['publication_status'] = $request->publication_status;
        $image = $request->file('blog_image');
        if ($image) {
       $image_name=str_random(20);
       $ext=strtolower($image->getClientOriginalExtension());
       $image_full_name=$image_name.'.'.$ext;
       $upload_path='public/Blog/';
       $image_url=$upload_path.$image_full_name;
       $success=$image->move($upload_path,$image_full_name);
       if ($success) {
          $data['blog_image']=$image_url;
             $img=DB::table('blog')->where('blog_id',$blog_id)->first();
             $image_path = $img->blog_image;
             
          $blog=DB::table('blog')->where('blog_id',$blog_id)->update($data); 
         if ($blog) {
               Session::put('message', 'Blog Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
      }else{
        $oldphoto=$request->old_photo;
         if ($oldphoto) {
          $data['blog_image']=$oldphoto;  
          $user=DB::table('blog')->where('blog_id',$blog_id)->update($data); 
         if ($user) {
                Session::put('message', 'Blog Updated Successfully');
               return Redirect()->back();                      
            }else{
              return Redirect()->back();
             } 
          }
       }
    }

    public function DeleteBlog($blog_id)
    {
        $delete_blog = DB::table('blog')
                ->where('blog_id', $blog_id)
                ->delete();
        return Redirect()->back();
    }

    

    public function CategoryDetails($category_id)
    {
       $published_post = DB::table('blog')
               ->where('publication_status', 1)
               ->where('category_id', $category_id)
               ->orderBy('blog_id','desc')
               ->get();
      return view('pages.master_layout', compact('published_post'));
    }

    public function RecentBlog($blog_id)
    { 
      
      $published_post = DB::table('blog')
               ->where('publication_status', 1)
               ->where('blog_id', $blog_id)
               ->orderBy('blog_id','desc')
               ->get();
      return view('pages.master_layout', compact('published_post'));

    }

    public function PopularBlog($blog_id)
    {
       $published_post = DB::table('blog')
               ->where('publication_status', 1)
               ->where('blog_id', $blog_id)
               ->orderBy('blog_id','desc')
               ->get();
      return view('pages.master_layout', compact('published_post'));
    }

    public function AllBlogShow()
    {
        return view('all_blog_show');
    }

    public function BlogDetails($blog_id)
    {
        $blog_details = DB::table('blog')->where('blog_id', $blog_id)->first();
        return view('blog_details', compact('blog_details'));
    }
}
