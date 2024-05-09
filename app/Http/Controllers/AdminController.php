<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\critRequest;
use App\Http\Requests\univFullRequest;
use App\Http\Requests\univRequest;
use App\Models\Critère;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function index()
    {
        return view('admin.dashboard');
    }

    public  function displayCritere()
    {
        $allCrit = Critère::all();
        return view('admin.critère', ['allCrit' => $allCrit]);
    }

    public function storeCritere(critRequest $request)
    {
        $crit = Critère::create($request->validated());
        return redirect()->route('admin.critere')->with(
            'success',
            'Opération effectuer avec succès'
        );
    }
    public function editCritere(Critère $id)
    {
        return view('admin.editCritère', ['crit' => $id]);
    }

    public function updateCritere(Critère $id, critRequest $request)
    {
        $id->update($request->validated());
        return redirect()->route('admin.critere')->with(
            "success",
            "Opération effectuer avec success"
        );
    }

    public function destroyCritere(Critère $id)
    {
        $id->delete();
        return redirect()->route('admin.critere')->with(
            'success',
            'Opération effectuer avec success'
        );
    }

    public function displayUniversity(){
        return view('admin.universites', ['universities' => University::all()]);
    }

    public function storeUniversity(univRequest $request)
    {

            University::create($request->validated());
        return redirect()->route('admin.university')->with(
            'success',
            'Opération effectuer avec success'
        );
    }

    public function editUniversity(University $id)
    {
        return view('admin.editUniversity', ['university' => $id]);
    }

    public function updateUniversity(univFullRequest $request, University $id)
    {
        $id->update($request->validated());
        return redirect()->route('admin.university')->with(
            'success',
            'Opération effectuer avec success'
        );
    }

    public function destroyUniversite(University $id){
        $id->delete();
        return redirect()->route('admin.universite')->with(
            'success',
            'operation effectuer avec success'
        );
    }

    public function displayUsers()
    {
        return view('admin.users', ['users'=>User::all()]);
    }

    public  function editUser(User $id)
    {
        return view('admin.editUsers', ['user' => $id]);
    }

    public  function destroyUsers(User $id)
    {
        $id->delete();
        return redirect()->route('admin.users')->with(
            'success',
            'operation effectuer avec success'
        );

    }
}
