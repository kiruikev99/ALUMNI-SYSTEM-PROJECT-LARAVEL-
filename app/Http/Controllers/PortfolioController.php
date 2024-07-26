<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DateTimeZone;
use DateTime;

class PortfolioController extends Controller
{
    public function index()
    {
         // Set the timezone to a specific country, e.g., America/New_York
         $timezone = 'Africa/Nairobi';
         $datetime = new DateTime('now', new DateTimeZone($timezone));
         $currentTime = $datetime->format(' H:i:s');


        $portfolios = Portfolio::where('user_id', Auth::id())->get();
        return view('role-permission.portfolio.index', [
            'portfolios' => $portfolios,
            'currentTime' => $currentTime,
        ]);
    }

    public function show(Portfolio $portfolio)
    {
        return view('role-permission.portfolio.show', compact('portfolio'));
    }

    public function create()
    {
        return view('role-permission.portfolio.create');
    }

    public function edit(Portfolio $portfolio)
    {
        return view('role-permission.portfolio.edit', [
            'portfolio' => $portfolio
        ]);
    }

    public function update(Request $request, Portfolio $portfolio)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'education' => 'required|string|max:255',
            'certificates' => 'nullable|file|mimes:pdf,doc,docx',
            'skills' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx',
            'description' => 'required|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle CV file
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
        } else {
            $cvPath = $portfolio->cv;
        }

        // Handle Certificates file
        if ($request->hasFile('certificates')) {
            $certPath = $request->file('certificates')->store('certificates', 'public');
        } else {
            $certPath = $portfolio->certificates;
        }

        // Handle Profile Picture file
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        } else {
            $profilePicturePath = $portfolio->profile_picture;
        }

        $portfolio->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'education' => $request->education,
            'certificates' => $certPath,
            'skills' => $request->skills,
            'cv' => $cvPath,
            'description' => $request->description,
            'profile_picture' => $profilePicturePath,
        ]);

        return redirect()->route('portfolio.index')->with('status', 'Portfolio updated successfully');
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'dob' => 'required|date',
            'education' => 'required|string|max:255',
            'certificates' => 'nullable|file|mimes:pdf,doc,docx',
            'skills' => 'nullable|string',
            'cv' => 'nullable|file|mimes:pdf,doc,docx',
            'description' => 'required|string',
            'profile_picture' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Handle CV file
        if ($request->hasFile('cv')) {
            $cvPath = $request->file('cv')->store('cvs', 'public');
        } else {
            $cvPath = null;
        }

        // Handle Certificates file
        if ($request->hasFile('certificates')) {
            $certPath = $request->file('certificates')->store('certificates', 'public');
        } else {
            $certPath = null;
        }

        // Handle Profile Picture file
        if ($request->hasFile('profile_picture')) {
            $profilePicturePath = $request->file('profile_picture')->store('profile_pictures', 'public');
        } else {
            $profilePicturePath = null;
        }

        $portfolio = Portfolio::create([
            'user_id' => Auth::id(),
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'dob' => $request->dob,
            'education' => $request->education,
            'certificates' => $certPath,
            'skills' => $request->skills,
            'cv' => $cvPath,
            'description' => $request->description,
            'profile_picture' => $profilePicturePath,
        ]);

        return redirect()->route('portfolio.index')->with('status', 'Portfolio created successfully');
    }

    public function destroy(Portfolio $portfolio)
    {
        $portfolio->delete();
        return redirect()->route('portfolio.index')->with('status', 'Portfolio deleted successfully');
    }
}
