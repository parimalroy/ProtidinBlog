<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategorieController extends Controller {

    public function index() {
        $footers = 1;
        return view('admin.categories.addCategories', ['footers' => $footers]);
    }

    public function saveCategorie(Request $request) {
        $data = array();
        $data['categorie_name'] = $request->categorie_name;
        $data['categorie_description'] = $request->categorie_description;
        $data['publication_status'] = $request->publication_status;
        $data['created_at'] = date('Y-m-d H:i:s');
        DB::table('tbl_categories')->insert($data);
        return redirect('categorie-add')->with('message', 'Categorie save sucessfully ');
    }

    public function manageCategorie() {
        $footer = 0;
        $allCategories = DB::table('tbl_categories')
                        ->select('*')
                        ->get();
        return view('admin.categories.manageCategorie', ['footers' => $footer])->with(['allCategories'=>$allCategories]);
    }
    public function unublishCategorie($categorieId){
        $data=array();
        $data['publication_status']=0;
        DB::table('tbl_categories')
                ->where('id',$categorieId)
                ->update($data);
        return redirect('categorie-manage');
    }
    public function publishCategorie($categorieId){
      $data=array();
        $data['publication_status']=1;
        DB::table('tbl_categories')
                ->where('id',$categorieId)
                ->update($data);
        return redirect('categorie-manage');  
    }
    
    public function deleteCategorie($categorieId){
        Db::table('tbl_categories')
                ->where('id',$categorieId)
                ->delete();
        return redirect('categorie-manage');
    }

}
