<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingPlan;

class PricingPlanController extends Controller
{
    // display all pricing plans
    public function index(){
        $pricingPlans = PricingPlan::all();
        if (request()->wantsJson()) {
            return response()->json($pricingPlans);
        }
        return view('services', compact('pricingPlans'));
    }
    // creating a new pricing plan
    public function store(Request $request)
    {
    try {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'rate' => 'required|string|max:255',
            'description' => 'required|string',
        ]);
        $plan = PricingPlan::create($validated);
        return response()->json(['message' => 'Service created successfully!', 'plan' => $plan], 201);
    } catch (\Exception $e) {
        \Log::error('Error creating pricing plan: ' . $e->getMessage());
        return response()->json(['message' => 'An error occurred'], 500);
    }
    }
    // deleting plan
    public function destroy($id){
        try{
            $plan=PricingPlan::findorfail($id);
            $plan->delete();
            return response()->json(['success' => true, 'message' => 'Pricing plan deleted successfully!']);
        }
        catch (\Exception $e) {
            \Log::error('Error deleting pricing plan: ' . $e->getMessage());
            return response()->json(['message' => 'An error occurred while deleting the plan.'], 500);
        }
    }
}
