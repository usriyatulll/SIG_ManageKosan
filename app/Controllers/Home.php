<?php

namespace App\Controllers;

class Home extends BaseController
{
    // view dashboard
    public function index(): string
    {
        $data = [
            'judul' => 'Dashboard',
            'page' => 'v_dashboard',


        ];
        return view('v_template', $data);
    }

    // view dashboard
    public function viewMap(): string
    {
        $data = [
            'judul' => 'View Map',
            'page' => 'v_view_map',


        ];
        return view('v_template', $data);
    }
    // base map
    public function baseMap(): string
    {
        $data = [
            'judul' => 'Base Map',
            'page' => 'v_base_map',


        ];
        return view('v_template', $data);
    }
    // base marker
    public function marker(): string
    {
        $data = [
            'judul' => 'Marker',
            'page' => 'v_marker',


        ];
        return view('v_template', $data);
    }
}
