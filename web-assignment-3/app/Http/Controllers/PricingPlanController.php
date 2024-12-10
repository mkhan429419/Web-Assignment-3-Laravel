<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PricingPlan;
use App\Models\Service;

class PricingPlanController extends Controller
{
    // display all pricing plans and all the services
    public function index(){
        $pricingPlans = PricingPlan::all();
        $services = Service::all();
        // if request demand response in json we send the plans in json format
        if (request()->wantsJson()) {
            return response()->json($pricingPlans);
        }
        // passing pricing plans and services to the services page
        return view('services', compact('pricingPlans', 'services'));
    }
    // creating a new pricing plan
    public function store(Request $request)
    {
    try {
        // validating the incoming data
        $validated = $request->validate([
            'name' => 'required|string',
            'price' => 'required|numeric',
            'rate' => 'required|string',
            'description' => 'required|string',
        ]);
        $plan = PricingPlan::create($validated); // creating a pricing plan using validated data
        return response()->json(['message' => 'Service created successfully!', 'plan' => $plan], 201);
    } catch (\Exception $e) {
        \Log::error('Error creating pricing plan: ' . $e->getMessage());
        return response()->json(['message' => $e->getMessage()], 500);
    }
    }
    // deleting plan
    public function destroy($id){
        try{
            // find plan or throw exception if not found
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

            $plan = PricingPlan::findOrFail($id); // finding plan by id
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
    // to show a single plan by id
    public function show($id)
    {
        $plan = PricingPlan::find($id);  // finding the plan
        if (!$plan) {
            return response()->json(['success' => false, 'message' => 'Plan not found'], 404);
        }
        return response()->json(['success' => true, 'plan' => $plan], 200); // return plan information in json format
    }
}
