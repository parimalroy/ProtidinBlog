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
        return view('frontEnd.readMore.readmoreContent', ['categorie' => $categories,'blogsById'=>$blogsById]);
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

}
