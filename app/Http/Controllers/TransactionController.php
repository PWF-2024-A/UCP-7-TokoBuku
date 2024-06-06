<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function index()
{
    $transactions = Transaction::with('book', 'order')->get();
    return view('transactions.index', compact('transactions'));
}


}
