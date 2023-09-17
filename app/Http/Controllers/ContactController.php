<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate and process the submitted data
        $name = $request->input('name');
        $surname = $request->input('surname');
        $cellNumber = $request->input('cellNumber');
        $email = $request->input('email');
        $projectType = $request->input('projectType');
        $otherReason = $request->input('other');


        // Perform database operations, send emails, etc.
        // Save the data as needed

        // Redirect the user to a success page or back to the form
        return redirect('/');
    }

    public function verifyCaptcha(Request $request)
    {
        // Validate the CAPTCHA
        $recaptchaSecretKey = '6Lf-thsoAAAAABrzGL5jW0jg4rIk3rZXvR6Ahsx7';
        $recaptchaResponse = $request->input('g-recaptcha-response');

        $response = Http::asForm()->post('https://www.google.com/recaptcha/api/siteverify', [
            'secret' => $recaptchaSecretKey,
            'response' => $recaptchaResponse,
        ]);

        $responseData = $response->json();

        if ($responseData['success']) {
            // CAPTCHA verification passed
            // Redirect to the form for further processing or return a success response
        } else {
            // CAPTCHA verification failed
            // Redirect to the form with an error message or return an error response
        }
    }
}
