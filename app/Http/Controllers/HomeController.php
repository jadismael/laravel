<?php

namespace App\Http\Controllers;


use App\Models\UserAddress;
use App\Models\UserPaymentInformation;
use App\Services\Api\DemoApiService;
use App\Services\GuzzleService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Mockery\Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application view based on which info was already collected.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request, DemoApiService $demoApiService)
    {

        $user = Auth::user();
        if (!$user->address) {
            $addressFields = UserAddress::FIELDS;
            return view('viewTwo', compact('addressFields'));
        }
        if (!$user->paymentInformation) {
            $paymentFields = UserPaymentInformation::FIELDS;
            return view('viewThree', compact('paymentFields'));
        }
        if (!$user->paymentData) {
            try {
                return $demoApiService->sendPaymentInfo( $user);
            } catch (Exception $e) {
                echo 'Caught exception: ', $e->getMessage(), "\n";
            }
        }

        $paymentDataId = $user->paymentData->payment_data_id;
        return view('viewSuccess', compact('paymentDataId'));

    }

}
