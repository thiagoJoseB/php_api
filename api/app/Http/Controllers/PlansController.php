<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plans;

class PlansController extends Controller
{
    public function getPlans(){
        return Plans::all();
    }

    public function createPlans(Request $request) {

        $request->validate([
            'title' => 'required|string|max:50', 
            'descriptionPlans' => 'required|string|max:100', 
            'datePlans' => 'required|date', 
            'participants' => 'string|max:50',
        ]);

        $plans = Plans::create($request->all());
        return response()->json($plans, 201);
        
    }


    public function showPlans($idPlans){

        $plans = Plans::where('idPlans', $idPlans)->first();

        if (!$plans){
            return response()->json(['message' => 'Plans não encotrado'], 404);
        }

        return response()->json($plans);

    }

    public function updatePlans(Request $request, $idPlans) {

        $plans = Plans::find($idPlans);

        if (!$plans) {
            return response()->json(['message' => 'Plans não encotrado'], 404);
        }

        $request->validate([
            'title' => 'required|string|max:50', 
            'descriptionPlans' => 'required|string|max:100', 
            'datePlans' => 'required|date', 
            'participants' => 'string|max:50',
        ]);


        $plans->update($request->all());
        return response()->json(['message' => 'Plans atualizado com sucesso', 'data'=> $plans], 200);
    }

    public function deletePlans($idPlans) {

        $plans = Plans::find($idPlans);

        if (!$plans) {
            return response()->json(['message' => 'Plans não encotrado'], 404);
        }

        $plans->delete();
        return response()->json(['message' => 'Plans deletado com sucesso',], 200);
  
    }
}
