<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\User;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project() {
        $projects = Project::latest()->filter(request(['search']))->get();
        return view('findproject', compact('projects'));
    }

    // create Project
    public function create(){
        return view('createproject');
    }

    // store Project data
    public function store(Request $request)
    {
        // $request->validate([
        //     'title_service' => 'required|string',
        //     'price' => 'required|integer',
        //     'location' => 'required|string',
        // ]);

        $project = new Project;
        $project->user_id = $request->user_id;
        $project->project_name = $request->project_name;
        $project->price = $request->price;
        $project->price2 = $request->price2;
        $project->price3 = $request->price3;
        $project->item_time = $request->item_time;
        $project->item_time2 = $request->item_time2;
        $project->item_untis_time = $request->item_untis_time;
        $project->item_units_time2 = $request->item_units_time2;
        $project->item_description = $request->item_description;
        $project->location = $request->location;
        $project->project_category = $request->project_category;
        $project->save();

        return redirect()->route('user-profile')->with('success', 'Project created successfully.');
    }

    // show Project
    public function show(Project $project)
    {
        $user = $project->user;
        return view('projectdetails', compact('project'), ['project' => $project, 'user' => $user] );
    }

    // users Project
    public function profile() {
        return view('user-profile', ['projects' => auth()->user()->projects()->get()]);
    }

    // manage
    public function manage() {
        return view('manage', ['projects' => auth()->user()->projects()->get()]);
    }

    // Delete Listing
    public function destroy(Project $project) {
        $project->delete();
        return redirect('/manage')->with('message', 'Listing Deleted Succesfully');
    }

    // seller profile
    public function sellerProfile($id) {
        $user = User::findOrFail($id);
        $products = $user->projects()->get();
        return view('seller-profile', compact('projects'));
    }
}
