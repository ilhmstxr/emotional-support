<?php

namespace App\Http\Controllers;

use App\Models\consultantInfo;
use App\Models\transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class TransactionController extends Controller
{
    public function check_order(Request $request)
    {
        // return $request->view_consultant;


        $price_check = consultantInfo::get();

        $minimum_price = consultantInfo::min('price_meet');

        Carbon::setLocale('id');

        // return $request;
        // return $view_consultant;
        $tipe = $request->tipe;
        $time = $request->waktu;
        $date = $request->tanggal;
        $harga = $request->harga;
        // return $fetch;
        $now = Carbon::now()->setTimezone('Asia/Jakarta');;
        $currentTime = $now->format('H:i');

        // return $currentTime;
        // time is 13:05
        if ($time < $currentTime) {
            return redirect()->back()->with('denied', "tidak boleh kurang dari waktu");
        }

        if (is_null($harga)) {
            return redirect()->back()->with('denied', 'minimal ga gratis');
        } else if ($harga < $minimum_price) {
            return redirect()->back()->with('denied', "harga terlalu murah naikan harga minimal $minimum_price");
        }

        $consultant = consultantInfo::where('price_meet', '>=', $harga)->get();
        foreach ($consultant as $c) {
            $helped = $c->helped;
            $session = $c->sessions;

            // if the consultant have 0 session
            $ratio = ($session > 0) ? $helped / $session : 0;

            $rating = round($ratio * 5, 1);
            $c->rating = $rating;
        }

        // $view_consultant = $view_consultant + 1;
        $view_consultant = $request->view_consultant + 1;
        $compact = ['consultant', 'tipe', 'time', 'date', 'harga', 'view_consultant'];
        // return $view_consultant;
        // return $compact;
        return view('janjitemu')->with(compact($compact))->with('approved', 'Berhasil menemukan beberapa konsultan');
        // return view('psikolog', compact($compact));
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

        $date = $request->date;
        $time = $request->time;
        // return $time;
        // return $date;

        if (preg_match('/^\d{2}:\d{2}$/', $time)) {
            $time .= ':00';
        } else {
            $time = '00:00:00';
        }

        $carbonTime = Carbon::createFromFormat('H:i:s', $time);
        $modifiedTime = $carbonTime->format('H:i:s');

        list($year, $month, $day) = explode('-', $date);
        list($hour, $minute, $second) = explode(':', $modifiedTime);
        $endHour = $hour + 1;
        $endDate = $year . "-" . $month . "-" . $day;
        $endTime = $endHour . "-" . $minute . "-" . $second;

        $tipe = $request->tipe;

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
        $harga = $request->harga;

        $insert_transaction = [
            // 'transaction_id' => $this->check_order(),
            'type' => $tipe,
            // 'transaction_id' => $sesi,
            'customers_id' => auth()->user()->id,
            'consultant_id' => $request->consultant_id,
            'price' => $request->price,
            'rent_at' => $date . ' ' . $time,
            'end_at' => $endDate . ' ' . $endTime,
        ];

        transaction::create($insert_transaction);
        consultantInfo::where('id', $request->consultant_id)->update(['status' => 'sibuk']);


        $month = $month - 1;
        $compact = ['id', 'tipe', 'sesi', 'harga', 'year', 'month', 'day', 'endHour', 'minute', 'second'];
        return redirect()->route('chatify')->with(compact($compact));
        // return redirect()->back();
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
