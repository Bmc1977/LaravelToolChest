<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Group;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user  = Auth::user();
        $tools = Tool::tools($user);
        $categories = Category::categories($user);
        $groups = Group::groups($user);
        return Response(view('dashboard', ['tools' => $tools, 'categories' => $categories, 'groups' => $groups]));
    }
}
