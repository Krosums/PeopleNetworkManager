<?php

namespace App\Http\Controllers;

use App\Models\Person;
use Illuminate\Http\Request;
use App\Models\Workplace;

class PersonController extends Controller
{
    public function index(){
    $people = Person::with('workplace')->orderBy('created_at', 'desc')->paginate(10);
    return view('people.index', ["people" => $people]);

    }
    public function show(Person $person){
    $person-> load('workplace');
    
     return view('people.show', ["people"=>$person]);

    }

    public function create(){
        $workplaces=Workplace::all();
    return view('people.create', ["workplaces" => $workplaces]);
    }

    public function store(Request $request){
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|integer|min:18|max:100',
            'bio' => 'required|string|max:1000|min:20',
            'workplace_id' => 'required|exists:workplaces,id',
        ]);

        Person::create($validated);

        return redirect()->route('people.index')->with('success', "Person Added!");
    }
    public function destroy(Person $person){
        $person -> delete();

        return redirect()->route('people.index')->with('success', "Person Deleted!");;
    }

}
