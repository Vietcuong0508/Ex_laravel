<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DataHandleController extends Controller
{
    public function handlePathVariable($id)
    {
        return "Tham số vừa truyền lên là ".$id;
    }

    public function handleQueryString()
    {
        $firstName = $_GET['firstName'];
        $lastName = $_GET['lastName'];
        $email = $_GET['email'];
        return view('datahandle', ['firstName' => $firstName,
            'lastName' => $lastName,
            'email' => $email
        ]);
//        echo "firstName = $firstName <br>lastName = $lastName <br>email = $email";
    }

    public function handleForm()
    {
        return view('form-data');
    }

    public function processForm(Request $request)
    {
        $eventName = $request->get('eventName');
        $bandNames = $request->get('bandNames');
        $startDate = $request->get('startDate');
        $endDate = $request->get('endDate');
        $portfolio = $request->get('portfolio');
        $ticketPrice = $request->get('ticketPrice');
        $status = $request->get('status');
        return view('form-success', [
            'eventName' => $eventName,
            'bandNames' => $bandNames,
            'startDate' => $startDate,
            'endDate' => $endDate,
            'portfolio' => $portfolio,
            'ticketPrice' => $ticketPrice,
            'status' => $status
        ]);
    }
}
