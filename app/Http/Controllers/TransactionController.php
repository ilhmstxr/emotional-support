<?php

namespace App\Http\Controllers;

use App\Models\transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function check_order(){
        
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

        $id = $randomNumber;


        
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function show(transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(transaction $transaction)
    {
        //
    }
}
