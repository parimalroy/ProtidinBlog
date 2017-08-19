<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller {

    public function index() {
        $categories = 1;
        return view('frontEnd.home.homeContent', ['categorie' => $categories]);
    }

    public function blogReadmore() {
        $categories = 1;
        return view('frontEnd.readMore.readmoreContent', ['categorie' => $categories]);
    }

    public function detailsCategorie() {
        $categories = 0;
        return view('frontEnd.categores.categorieContent', ['categorie' => $categories]);
    }
    public function getContact() {
        $categories = 0;
        return view('frontEnd.contact.contactContent', ['categorie' => $categories]);
    }

}
