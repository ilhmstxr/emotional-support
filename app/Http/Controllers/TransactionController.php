<?php

namespace App\Http\Controllers;

use App\Models\consultantInfo;
use App\Models\transaction;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class TransactionController extends Controller
{
    public function check_order(Request $request)
    {
        // return $request;
        $price_check = consultantInfo::get();

        $minimum_price = consultantInfo::min('price');

        if (is_null($request->harga)) {
            return redirect()->back()->with('denied', 'minimal ga gratis');
        } else if ($request->harga < $minimum_price) {
            return redirect()->back()->with('denied', 'kemurahen jancok munggahno titik')->with('advice', "saran kami dinaikin minimal $minimum_price");
        }
        // foreach ($price_check as $p) {
        // }
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

        $tipe = $request->tipe;
        $sesi = $request->value;

        $insert_transatcion = [
            // 'transaction_id' => $this->check_order(),
            'type' => $tipe,
            // 'transaction_id' => $sesi,
            'customers_id' => 1,
            'consultant_id' => 2,
            'price' => 40000,
        ];

        transaction::create($insert_transatcion);

        return redirect()->back();
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
