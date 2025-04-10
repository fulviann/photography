<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        try {
            $contentCount = \App\Models\Content::count();
            $userCount = \App\Models\User::count();
            
            return view('admin.new-dashboard', [
                'contentCount' => $contentCount,
                'userCount' => $userCount
            ]);
            
        } catch (\Exception $e) {
            // Fallback jika ada error
            return view('admin.new-dashboard', [
                'contentCount' => 0,
                'userCount' => 0
            ]);
        }
    }
}
