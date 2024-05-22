<?php

namespace App\Http\Controllers;

use App\Models\WebsiteContent;
use Illuminate\Http\Request;

class HomebannerController extends Controller
{
    public function index()
    {
        $homebanners = WebsiteContent::all();
        return view('admin.homebanner.index', compact('homebanners'));
    }
    public function homeBanner()
    {
        $homeBanner = WebsiteContent::where('type', 'home-banner')->first();
        return view('frontend.home', compact('homeBanner'));
    }

    public function create()
    {
        return view('admin.homebanner.create');
    }

    public function store(Request $request)
    {
        WebsiteContent::create($request->all());
        return redirect()->route('homebanner.index')->with('success', 'Homebanner created successfully.');
    }

    public function show(WebsiteContent $homebanner)
    {
        return view('admin.homebanner.show', compact('homebanner'));
    }

    public function edit(WebsiteContent $homebanner)
    {
        
        return view('admin.homebanner.edit', compact('homebanner'));
    }

    public function update(Request $request, WebsiteContent $homebanner)
    {
        $homebanner->update($request->all());
        return redirect()->route('homebanner.index')->with('success', 'Homebanner updated successfully.');
    }

    public function destroy(WebsiteContent $homebanner)
    {
        $homebanner->delete();
        return redirect()->route('homebanner.index')->with('success', 'Homebanner deleted successfully.');
    }
}
