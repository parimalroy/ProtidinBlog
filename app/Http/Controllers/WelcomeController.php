<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class WelcomeController extends Controller {

    public function index() {
        $categories = 1;
        $publishBlogs=DB::table('tbl_blog')
                            ->where('publication_status',1)
                            ->orderBy('blog_id','desc')
                            ->take(2)
                            ->get();
      
        return view('frontEnd.home.homeContent', ['categorie' => $categories,'publishBlogs'=> $publishBlogs]);
    }

    public function blogReadmore($blog_id) {
        $categories = 1;
        $blogsById=DB::table('tbl_blog')
                            ->where('blog_id',$blog_id)
                            ->get();
        $getAllBlogs=DB::table('tbl_blog')
                            ->where('publication_status',1)
                            ->take(4)
                            ->get();
        $commentByBlogsId=DB::table('tbl_comment')
                                    ->join('users', 'users.id', '=', 'tbl_comment.user_id')
                                    ->select('tbl_comment.*', 'users.name')
                                    ->where('publication_status',1)
                                    ->where('blog_id',$blog_id)
                                    ->get();
        return view('frontEnd.readMore.readmoreContent', ['categorie' => $categories,'blogsById'=>$blogsById,'getAllBlogs'=>$getAllBlogs,'commentByBlogsId'=>$commentByBlogsId]);
    }

    public function detailsCategorie($categorie_id) {
        $categories = 0;
        $blogByCategoriesId=DB::table('tbl_blog')
                                ->where('publication_status',1)
                                ->where('categorie_id',$categorie_id)
                                ->get();
        return view('frontEnd.categores.categorieContent', ['categorie' => $categories,'blogByCategoriesId'=>$blogByCategoriesId]);
    }
    public function getContact() {
        $categories = 0;
        return view('frontEnd.contact.contactContent', ['categorie' => $categories]);
    }
    
    public function saveComment(Request $request){
        $data=array();
        $data['comment']=$request->comment;
        $data['user_id']=$request->user_id;
        $data['blog_id']=$request->blog_id;
        $data['created_at']= date('Y-m-d H:i:s');
        DB::table('tbl_comment')->insert($data);
        return redirect('read-more/'.$request->blog_id);
       
    }

}
