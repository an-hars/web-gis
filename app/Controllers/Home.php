<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data=[
            "judul" => "Home",
            "page" => "v_dashboard",
        ];

        return view('v_template', $data);
    }
     public function viewMaps(): string
    {
        $data=[
            "judul" => "view maps",
            "page" => "v_viewmaps",
        ];

        return view('v_template', $data);
    }
    public function baseMaps(): string
    {
        $data=[
            "judul" => "base maps",
            "page" => "v_basemaps",
        ];

        return view('v_template', $data);
    }
     public function marker(): string
    {
        $data=[
            "judul" => "marker",
            "page" => "v_marker",
            
        ];

        return view('v_template', $data);
    }
    public function poligon(): string
    {
        $data=[
            "judul" => "poligon",
            "page" => "v_poligon",
            
            
        ];

        return view('v_template', $data);
    }
}
