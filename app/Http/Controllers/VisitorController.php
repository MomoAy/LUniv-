<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Critère;
use App\Models\Notation;
use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class VisitorController extends Controller
{
    public function index()
    {
        return view("visitors.home");
    }

    public function ranking()
    {
        // Récupérer toutes les universités avec leur note moyenne
        $rankedUniversities = University::with('notations')
            ->select('universities.*', DB::raw('AVG(notations.note) as average_rating'))
            ->leftJoin('notations', 'universities.id', '=', 'notations.university_id')
            ->groupBy('universities.id')
            ->orderByDesc('average_rating')
            ->get();
        // dd($rankedUniversities);
        // Retourner la vue du classement avec les universités classées par leur note moyenne
        return view("visitors.ranking", ["rankedUniversities" => $rankedUniversities]);
    }

    public  function university()
    {
        $rankedUniversities = University::with('notations')
            ->select('universities.*', DB::raw('AVG(notations.note) as average_rating'))
            ->leftJoin('notations', 'universities.id', '=', 'notations.university_id')
            ->groupBy('universities.id')
            ->orderByDesc('average_rating')
            ->get();
        return view("visitors.university", ['rankedUniversities' => $rankedUniversities]);
    }

    public function showUniversity(University $id){
        $crits = Critère::all();
        return view('visitors.showUniversity', ['university' => $id, "crits" => $crits]);
    }

    public function addNotation(Request $request, $usid, $unid){
        $crit_values = [];
        $sum = 0;
        foreach ($request->all() as $key => $value) {
            if (strpos($key, 'crit_') === 0) {
                $crit_id = substr($key, 5);
                $crit_values[$crit_id] = $value;
                $sum += $value;
            }
        }


        $note = $sum / count($crit_values);

        Notation::create([
            'comment' => $request->comment,
            'note' => $note,
            'user_id' => $usid,
            'university_id' => $unid,
        ]);


        return redirect()->route("showUniversity", ["id" => $unid])->with(
            'success',
            'Votre avis a bien été enregistré'
        );
    }


}
