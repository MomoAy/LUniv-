<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\critRequest;
use App\Http\Requests\univFullRequest;
use App\Http\Requests\univRequest;
use App\Models\Critère;
use App\Models\Images;
use App\Models\Notation;
use App\Models\University;
use App\Models\User;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class AdminController extends Controller
{
    public  function index()
    {
        $nbUn = University::count();
        $nbCrit = Critère::count();
        $nbUsers = User::count();
        return view('admin.dashboard', ['nbUn' => $nbUn, 'nbCrit' => $nbCrit, 'nbUsers' => $nbUsers]);
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

    public function destroyUniversity(University $id){
        $id->delete();
        return redirect()->route('admin.universite')->with(
            'success',
            'operation effectuer avec success'
        );
    }

    public function showUniversityGallery($id)
    {
        $university = University::findOrFail($id);
        $images = $university->images; // Utilisation de la relation définie pour récupérer les images associées à l'université
        // dd($images);
        return view('admin.universityGallery', ['images'=>$images, 'university' => $university]);
    }

    public function storeUniversityImage(Request $request, $id)
    {
        $request->validate([
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,webp'], // Validation pour le champ image
        ]);
        $imageName = $request->file('image')->getClientOriginalName();
        
        Images::create([
            'url' => $imageName,
            'university_id' => $id
        ]);

        return redirect()->route('admin.showUniversityGallery', ['id' => $id, 'path'=>$imageName])->with('success', 'L\'image a été téléchargée avec succès.');
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
    public function deleteComment(Notation $id){
        $id->delete();
        return back()->with('success', 'Opération effectuer avec succes');
    }
}
