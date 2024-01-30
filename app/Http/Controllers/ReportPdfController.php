<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReportPdfController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function displayreport()
    {
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $sortBy = $request->input('sort_by');

        $title = 'Registered User Report'; // Report title

        $meta = [ // For displaying filters description on header
        'Registered on' => $fromDate . ' To ' . $toDate,
        'Sort By' => $sortBy
       ];

       $queryBuilder = User::select(['name', 'balance', 'registered_at']) // Do some querying..
                        ->whereBetween('registered_at', [$fromDate, $toDate])
                        ->orderBy($sortBy);

    $columns = [ // Set Column to be displayed
        'Name' => 'name',
        'Registered At', // if no column_name specified, this will automatically seach for snake_case of column name (will be registered_at) column from query result
        'Total Balance' => 'balance',
        'Status' => function($result) { // You can do if statement or any action do you want inside this closure
            return ($result->balance > 100000) ? 'Rich Man' : 'Normal Guy';
        }
    ];
    return PdfReport::of($title, $meta, $queryBuilder, $columns)
    ->editColumn('Registered At', [ // Change column class or manipulate its data for displaying to report
        'displayAs' => function($result) {
            return $result->registered_at->format('d M Y');
        },
        'class' => 'left'
    ])
    ->editColumns(['Total Balance', 'Status'], [ // Mass edit column
        'class' => 'right bold'
    ])
    ->showTotal([ // Used to sum all value on specified column on the last table (except using groupBy method). 'point' is a type for displaying total with a thousand separator
        'Total Balance' => 'point' // if you want to show dollar sign ($) then use 'Total Balance' => '$'
    ])
    ->limit(20) // Limit record to be showed
    ->stream(); //

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
}
