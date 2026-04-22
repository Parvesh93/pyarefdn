<?php

namespace App\Http\Controllers\Donor;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DonationController extends Controller
{

     public function __construct()
    {
        // Module Data

        $this->route = 'donor.donation';
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $donor= Auth::guard('donor')->user(); // donor ka role
        if(Auth::guard('donor')->check() ) {

            $data['rows'] = Donation::where('email', $donor->email)->where('status', '1')->get();
            return view('donor.donation.index', $data);
        } else {
            return redirect()->route('home')->with('error', 'Unauthorized access.');
        }
           
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data['donation'] = Donation::find($id);
        return view('donor.donation.view', $data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }


    public function printDonation($id)
    {
        $data['donation'] = Donation::find($id);
        return view('donor.donation.print', $data);
    }

    
}
