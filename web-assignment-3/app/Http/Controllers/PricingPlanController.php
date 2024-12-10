<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingPlan;
use App\Models\Service;

class PricingPlanController extends Controller
{
    // display all pricing plans
    public function index(){
        $pricingPlans = PricingPlan::all();
        $services = Service::all();
        if (request()->wantsJson()) {
            return response()->json($pricingPlans);
        }
        return view('services', compact('pricingPlans', 'services'));
    }
    // creating a new pricing plan
    public function store(Request $request)
    {
    try {
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'rate' => 'required|string',
            'description' => 'required|string',
        ]);
        $plan = PricingPlan::create($validated);
        return response()->json(['message' => 'Service created successfully!', 'plan' => $plan], 201);
    } catch (\Exception $e) {
        \Log::error('Error creating pricing plan: ' . $e->getMessage());
        return response()->json(['message' => $e->getMessage()], 500);
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
    public function update(Request $request, $id)
{
    try {
        $validated = $request->validate([
           'name' => 'required|string',
            'price' => 'required|numeric',
            'rate' => 'required|string',
            'description' => 'required|string',
        ]);

        $plan = PricingPlan::findOrFail($id);
        $plan->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Plan updated successfully!',
            'data' => $plan,
        ]);
    } catch (\Exception $e) {
        \Log::error('Error updating pricing plan: ' . $e->getMessage());
        return response()->json(['message' => $e->getMessage()], 500);
    }
}
public function show($id)
{
    $plan = PricingPlan::find($id); // Replace with your model's name
    if (!$plan) {
        return response()->json(['success' => false, 'message' => 'Plan not found'], 404);
    }

    return response()->json(['success' => true, 'plan' => $plan], 200);
}

}
