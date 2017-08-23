<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use Image;
use DB;
use Session;

class BlogController extends Controller
{
    public function index(){
        $footers = 1;
        $publishCategories=DB::table('tbl_categories')
                                ->where('publication_status',1)
                                ->get();
        return view('admin.blog.addBlog',['footers' => $footers,'publishCategories'=> $publishCategories]);
    }
    
    public function saveBlog(Request $request){
        
        $imageUrl=$this->blogImage($request);
        $data=array();
        $data['blog_title']=$request->blog_title;
        $data['blogger_name']=Session::get('admin_name');
        $data['categorie_id']=$request->categorie_id;
        $data['blog_short_description']=$request->blog_short_description;
        $data['blog_description']=$request->blog_description;
        $data['date']=$request->date;
        $data['blog_image']=$request->blog_image=$imageUrl;
        $data['publication_status']=$request->publication_status;
        DB::table('tbl_blog')->insert($data);
        return redirect('blog-add')->with('message','Blog Save Sucessfully');
    }
    
    private function blogImage(Request $request){
        $blogImage=$request->file('blog_image');
        $fileExtention=$blogImage->getClientOriginalExtension();
        $uploadPath='blogImage/';
        $imageName=$request->blog_title.'.'.$fileExtention;
        $imageUrl=$uploadPath . $imageName;
        Image::make($blogImage)->resize(598, 212)->save($uploadPath.$imageName);
        return $imageUrl;
    }
}
