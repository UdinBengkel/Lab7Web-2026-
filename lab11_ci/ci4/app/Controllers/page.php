<?php 
namespace App\Controllers;

class Page extends BaseController 
{
    public function about()
    { 
        return view('about', [
            'title' => 'Halaman About',
            'content' => 'Ini adalah halaman abaut yang menjelaskan tentang isi
halaman ini.' 
        ]);
    }
    public function contact() 
    {
        return view('contact', [
            'title' => 'Halaman Contact',
            'content' => 'Ini adalah halaman contact.'
        ]);
    }

    public function artikel() 
    {
        return view('artikel', [
            'title' => 'Halaman Artikel',
            'content' => 'Ini adalah halaman artikel.'
        ]);
    }

    public function tos()
    {
        return view('tos', [
            'title' => 'Term of Services',
            'content' => 'Ini adalah halaman Term of Services.'
        ]);
    }
}