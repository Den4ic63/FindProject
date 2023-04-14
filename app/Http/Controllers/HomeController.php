<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $userOffices = $user->offices()->pluck('id');
        $projects = Project::whereHas('office', function ($query) use ($userOffices) {
            $query->whereIn('id', $userOffices);
        })->paginate(10);

        return view('home.index', compact('projects'));

    }

    public function search(Request $request)
    {
        $query = $request->input('query');

        $userOffices = auth()->user()->offices()->pluck('id');
        $hasMainOffice = Office::whereIn('id', $userOffices)->where('office_type', '=', 'Главный')->exists();

        if ($hasMainOffice) {
            $projects = Project::where('name', 'like', "%$query%")->get();
        } else {
            $projects = Project::whereHas('office', function ($query) use ($userOffices) {
                $query->whereIn('id', $userOffices);
            })
                ->where('name', 'like', "%$query%")
                ->get();
        }


        return view('home.search-results', compact('projects'));
    }



}
