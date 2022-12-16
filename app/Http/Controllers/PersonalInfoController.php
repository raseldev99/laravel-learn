<?php

namespace App\Http\Controllers;

use App\Models\PersonalInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Flasher\Prime\FlasherInterface;
use App\Notifications\PorsonsNotification;

class PersonalInfoController extends Controller
{
    public function form(){
        return view('form');
    }

    public function  addPerson(Request $request,FlasherInterface $flasher){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'profile_img'=>'required',
            'country'=>'required',
            'street_address'=>'required',
            'city'=>'required',
            'region'=>'required',
            'postal_code'=>'required|max:5',
        ]);
        $persons = new PersonalInfo();

        $persons->name = $request->name;
        $persons->email = $request->email;
        $persons->image_url = $request->profile_img;
        $persons->country = $request->country;
        $persons->street_address = $request->street_address;
        $persons->city = $request->city;
        $persons->state = $request->region;
        $persons->post_code = $request->postal_code;

        $persons->save();
         $flasher->addSuccess('Person has been saved successfully!');

         $personsNotify = Auth::user();R

         $personsNotify->notify(new PorsonsNotification($persons));
        return Redirect::to('persons');R
    }

    public function show(){
        $persons = PersonalInfo::all();
        return view('persons',[
            'persons' =>$persons
        ]);
    }
    public function singleview($id){
        $person = PersonalInfo::findOrFail($id);

        return view('singleview',[
            'person' =>$person
        ]);
    }
    public  function delete($id,FlasherInterface $flasher){
        $person = PersonalInfo::findOrFail($id);

        $person->delete();
        $flasher->addSuccess('Person has been saved successfully!');
        return Redirect::to('persons');
    }
    public function edit($id){
        $person = PersonalInfo::findOrFail($id);

        return view('editForm',[
            'person' => $person
        ]);
    }
    public function update(Request $request,$id,FlasherInterface $flasher){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'profile_img'=>'required',
            'country'=>'required',
            'street_address'=>'required',
            'city'=>'required',
            'region'=>'required',
            'postal_code'=>'required|max:5',
        ]);
        $person = PersonalInfo::findOrFail($id);

        $person->name = $request->name;
        $person->email = $request->email;
        $person->image_url = $request->profile_img;
        $person->country = $request->country;
        $person->street_address = $request->street_address;
        $person->city = $request->city;
        $person->state = $request->region;
        $person->post_code = $request->postal_code;

        $person->save();

        $flasher->addSuccess('Person has been Update successfully!');
        return Redirect::to('persons');
    }
}
