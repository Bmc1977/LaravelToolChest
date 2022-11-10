<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Group;
use App\Models\Tool;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $tools = Tool::tools($user);
        foreach ($tools as $tool)
        {
            $tool->category = Category::find($tool->category)->name;
            $tool->group = Group::find($tool->group)->name;
            $tool->brand = Brand::find($tool->brand)->name;
        }
        return Response(view('tools.tools', ["tools" => $tools]));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $categories = Category::categories($user);
        $groups = Group::groups($user);
        $brands = Brand::brands($user);
        return Response(view('tools.newtool', ['categories' => $categories, 'groups' => $groups, 'brands' => $brands]));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $userId = Auth::id();
        $categoryId = Category::where('name', $request->categorySelector)->first()->id;
        $groupId = Group::where('name', $request->groupSelector)->first()->id;
        $brandId = Brand::where('name', $request->brandSelector)->first()->id;
        $tool = Tool::create([
            'name' => $request->name,
            'category' => $categoryId,
            'group' => $groupId,
            'brand' => $brandId,
            'user' => $userId,
            'cost' => $request->cost,
            'quantity' => $request->quantity,
            'notes' => $request->notes,
        ]);
        $tool->save();
        return redirect()->route('tools');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function show($toolId)
    {
        $tool = Tool::find($toolId);
        return Response(view('tools.tool', ['tool' => $tool]));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function edit(Tool $tool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tool  $tool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tool $tool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tool  $toolId
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($toolId)
    {
        Tool::destroy($toolId);
        $user = Auth::user();
        $tools = Tool::tools($user);
        foreach ($tools as $tool)
        {
            $tool->category = Category::find($tool->category)->name;
            $tool->group = Group::find($tool->group)->name;
            $tool->brand = Brand::find($tool->brand)->name;
        }
        return redirect()->route('tools');
        // return Response(view('tools.tools', ["tools" => $tools]));
    }
}
