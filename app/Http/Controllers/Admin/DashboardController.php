<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Annual;
use App\Models\Campaign;
use App\Models\Donation;
use App\Models\Donor;
use App\Models\User;
use App\Models\Volunteer;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Carbon\CarbonImmutable;

class DashboardController extends Controller
{


    function __construct()
    {
        // Module Data
        $this->title     = trans_choice('module_dashboard', 1);
        $this->route     = 'admin.dashboard';
        $this->view      = 'admin.dashboard';
        $this->path      = 'dashboard';
        $this->access    = 'dashboard';

        // Dashboard is the landing page for authorised admin users, including
        // legacy Super Admin accounts that predate dashboard-view permissions.
        // Module-specific permissions still protect all management screens.
        $this->middleware(function ($request, $next) {
            $user = $request->user();
            abort_unless($user && (
                $user->is_admin == 1 ||
                $user->hasAnyRole(['Super Admin', 'Admin']) ||
                $user->can('dashboard-view')
            ), 403, 'Your account does not have dashboard access.');
            return $next($request);
        }, ['only' => ['index', 'show']]);
        $this->middleware('permission:' . $this->access . '-create', ['only' => ['create', 'store']]);
        $this->middleware('permission:' . $this->access . '-edit', ['only' => ['edit', 'update']]);
        $this->middleware('permission:' . $this->access . '-delete', ['only' => ['destroy']]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        // dd($request->month);

        $data['title'] = $this->title;
        $data['route'] = $this->route;
        $data['view'] = $this->view;
        $data['path'] = $this->path;
        $data['access'] = $this->access;


        if (!empty($request->month) || $request->month != null) {

            // dd($request->month);

            // $selectedDate = \Carbon\Carbon::createFromFormat('Y-m', $request->month);
            $selectedDate = \Carbon\Carbon::createFromFormat('Y-m-d', $request->month . '-01'); // Day = 1
            // dd($selectedDate);
            $currentYear = $selectedDate->year;

            $currentMonth = $selectedDate->month;

            // dd($currentMonth);
        } else {
            $selectedDate = Carbon::now()->firstOfMonth();
            $currentMonth = Carbon::now()->month;
            $currentYear  = Carbon::now()->year;
        }



       $months = [];
        $start = CarbonImmutable::now()->firstOfMonth()->addMonth(); // December 2025 tak cover karega
        for ($i = 0; $i < 12; $i++) {
            $month = $start->subMonths($i);
            $months[$month->format('Y-m')] = $month->format('F Y');
        }
        $data['months'] = $months;


        $currentSubMonth = $currentMonth == 1 ? 12 : $currentMonth - 1;
        $currentSubYear = $currentMonth == 1 ? $currentYear - 1 : $currentYear;

        // dd($currentMonth);
        // Current month total
        $currentMonthDonation = Donation::where('status', '1')
            ->where('payment_status', 'completed')
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->sum('amount');

        // dd($currentMonthDonation);

        // Previous month total
        $previousMonthDonation = Donation::where('status', '1')
            ->where('payment_status', 'completed')
            ->whereMonth('created_at', $currentSubMonth)
            ->whereYear('created_at', $currentSubYear)
            ->sum('amount');

        // Percentage change
        $percentageChangeDonation = 0;
        if ($previousMonthDonation > 0) {
            $percentageChangeDonation = (($currentMonthDonation - $previousMonthDonation) / $previousMonthDonation) * 100;
        }

        $data['total_donations'] = Donation::where('status', 1)
            ->where('payment_status', '!=', 'failed')   // failed exclude
            ->where('payment_status', '!=', 'pending')  // pending exclude
            ->get();
        $data['percentageChangeDonation'] = round($percentageChangeDonation, 1); // 1 decimal tak round

        //Donors Data

        // Current year donors (unique donor_ids)
        $currentYearDonors = Donation::where('status', '1')
            ->where('payment_status', 'completed')
            ->whereYear('created_at', $currentYear)
            ->distinct('donor_id')
            ->count('donor_id');
        // dd($currentYearDonors);

        // Previous year donors
        $previousYearDonors = Donation::where('status', '1')
            ->where('payment_status', 'completed')
            ->whereYear('created_at', $currentSubYear)
            ->distinct('donor_id')
            ->count('donor_id');

        // Percentage change
        $donorPercentageChange = 0;
        if ($previousYearDonors > 0) {
            $donorPercentageChange = (($currentYearDonors - $previousYearDonors) / $previousYearDonors) * 100;
        }

        // Aapke existing donors query (table ke liye ya list ke liye)
        $data['total_donors'] = Donor::with(['donations'])
            ->withCount('donations')
            ->withSum('donations', 'amount')
            ->orderByDesc('donations_sum_amount')
            ->get();

        $data['currentYearDonors'] = $currentYearDonors;
        $data['donorPercentageChange'] = round($donorPercentageChange, 1);

        // Current year volunteers
        $currentYearVolunteers = Volunteer::whereYear('created_at', $currentYear)
            ->count();

        // dd($currentYearVolunteers);

        // Previous year volunteers
        $previousYearVolunteers = Volunteer::whereYear('created_at', $currentSubYear)
            ->count();

        // Percentage change
        $volunteerPercentageChange = 0;
        if ($previousYearVolunteers > 0) {
            $volunteerPercentageChange = (($currentYearVolunteers - $previousYearVolunteers) / $previousYearVolunteers) * 100;
        }

        $data['total_volunteers'] = Volunteer::orderBy('id', 'desc')->get();
        $data['currentYearVolunteers'] = $currentYearVolunteers;
        $data['volunteerPercentageChange'] = round($volunteerPercentageChange, 1);
        $data['total_annual_reports'] = Annual::orderBy('id', 'desc')->get();
        $data['campaignCount'] = Campaign::count();


        // Current month donations per day
        $donationsByDay = Donation::where('status', '1')
            ->where('payment_status', 'completed')
            ->whereMonth('created_at', $currentMonth)
            ->whereYear('created_at', $currentYear)
            ->selectRaw('DAY(created_at) as day, SUM(amount) as total')
            ->groupBy('day')
            ->orderBy('day')
            ->pluck('total', 'day'); // [day => total]

        // dd($donationsByDay);

        // Labels (days of month)
        // $daysInMonth = Carbon::now()->daysInMonth;

        // ✅ Days in selected month
        $daysInMonth = Carbon::createFromDate($currentYear, $currentMonth, 1)->daysInMonth;
        $labels = range(1, $daysInMonth);

        // Fill data for chart
        $donationData = [];
        foreach ($labels as $day) {
            $donationData[] = $donationsByDay[$day] ?? 0;
        }

        // Total donations current month
        $totalDonations = array_sum($donationData);


        // dd($totalDonations);

        // Previous month total
        $previousMonthTotal = Donation::where('status', '1')
            ->where('payment_status', 'completed')
            ->whereMonth('created_at', $currentSubMonth)
            ->whereYear('created_at', $currentSubYear)
            ->sum('amount');

        // Percentage change
        $percentageChange = 0;
        if ($previousMonthTotal > 0) {
            $percentageChange = (($totalDonations - $previousMonthTotal) / $previousMonthTotal) * 100;
        }

        $data['labels'] = $labels; // days
        $data['donationData'] = $donationData; // donation amounts
        $data['totalDonations'] = $totalDonations;
        $data['percentageChange'] = round($percentageChange, 1);
        // ✅ Ye line updated hai:
        $data['monthName'] = Carbon::createFromDate($currentYear, $currentMonth, 1)->format('F Y');
        // dd($monthName);
        // Store selected value (in Y-m format)
        $data['selectedMonth'] = $selectedDate->format('Y-m');
        // Total days in selected/current month
        $data['daysInMonth'] = $selectedDate->daysInMonth;


        return view('admin.dashboard', $data);
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
        //
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

    public function filterByMonth(Request $request)
    {
        $month = $request->input('month'); // Format: "2025-10"

        try {
            $date = \Carbon\Carbon::createFromFormat('Y-m', $month);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Invalid month format'], 400);
        }

        $year = $date->year;
        $monthNum = $date->month;
        dd($monthNum);
    }
}
