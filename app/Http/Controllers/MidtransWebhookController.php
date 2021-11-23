<?php

namespace App\Http\Controllers;

use App\Models\Donation;
use App\Models\User;
use http\Env\Response;
use Illuminate\Http\Request;

class MidtransWebhookController extends Controller
{
    public function transactionRun(Request $request)
    {


        $notification_body = json_decode($request->getContent(), true);
        $transaction_id = $notification_body['order_id'];
        $status_code = $notification_body['status_code'];

        $donation = Donation::where('transaction_id', $transaction_id)->first();

        if (!$donation) {
            return response()->json(['code' => 404, 'message' => 'tidak ada order ID yang tepat'], 404);
        }
        switch ($status_code) {
            case '200':

                $donation->update([
                    'payment_status' => 2
                ]);

                $catUser = User::where('category_id', $donation->category_id)->get();



                break;
            case '201':
                $donation->update([
                    'payment_status' => 1
                ]);
                break;
            case '202':
                $donation->update([
                    'payment_status' => 3
                ]);
                break;
        }

        return response()->json(['code' => 200, 'message' => 'berhasil']);
    }
}
