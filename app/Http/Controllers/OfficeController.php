<?php

namespace App\Http\Controllers;

use App\Models\Office;
use App\Models\User;
use Illuminate\Http\Request;

class OfficeController extends Controller
{

    public function index()
    {
        $offices = Office::paginate(5);
        return view('offices.index', compact( 'offices'));
    }


    public function create()
    {
        return view('offices.create');

    }


    public function store(Request $request)
    {
        $office = Office::where('office_type', 'Главный')->first();
        if($office){
            if ($office->office_type == $request->office_type) {
                $office->office_type = 'Обычный';
                $office->save();
            }
        }


        $office=Office::create(
            [
                'name'=>$request->name,
                'country'=>$request->country,
                'city'=>$request->city,
                'office_type'=>$request->office_type,
            ]
        );

        return redirect()->route('home');
    }


    public function show(Office $office)
    {
        $office_id = $office->id;

        $users = User::whereDoesntHave('offices', function ($query) use ($office_id) {
            $query->where('id', $office_id);
        })->get();
        return view('offices.show', compact( 'office','users'));

    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy(Request $request)
    {

    }
}
