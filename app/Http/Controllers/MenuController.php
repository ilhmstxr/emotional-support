<?php

namespace App\Http\Controllers;

use App\Models\isNumberUsed;
use App\Models\transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('menu');
    }

    public function indexCurhat()
    {
        return view('curhat');
    }


    public function getRandomUniqueNumber()
    {
        $minRand  = 100000000000;
        $maxRand  = 999999999999;

        $check = false;
        do {
            $randomNumber = random_int($minRand, $maxRand);
            $transaction_id_check = transaction::all();
            foreach ($transaction_id_check as $transaction_id) {
                if ($transaction_id->transaction_id == $randomNumber) {
                    $check = true;
                }
            }
            $check = false;
        } while ($check);
    }



    public function indexJT()
    {
        // pending 
        $date = today()->format('d-m-Y');

        // $id = $date->format('dmy');

        // return $date;
        $compact = ['date'];
        return view('janjitemu', compact($compact));
    }

    public function indexCO()
    {
        return view('curhatonline');
    }

    public function indexPsikolog()
    {
        return view('psikolog');
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
