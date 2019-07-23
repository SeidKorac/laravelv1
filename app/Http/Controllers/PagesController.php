<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to Laravel!';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);  // ovo je drugi nacin da se postigne ono uradjeno u liniji prije ove
    }
    public function about() {
        $title = 'About!';
        // return view('pages.about', compact('title'));
        return view('pages.about')->with('title', $title);  // ovo je drugi nacin da se postigne ono uradjeno u liniji prije ove
    }
    public function services() {
        $data = array(
            'title' => 'Services!',
            'services' => ['Web Design', 'Programming', 'SEO']

        );
        return view('pages.services')->with($data);
    }
}
