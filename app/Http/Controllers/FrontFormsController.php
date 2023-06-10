<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use App\Models\FormSubmission;
use Illuminate\Support\Facades\Validator;

class FrontFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function show($formId)
    {
         // Load the form data from the database using the $formId parameter
         $formData = FormSubmission::findOrFail($formId);

         // Convert the form data from JSON to an array
         $formFields = json_decode($formData->form_data, true);
         // Pass the form data to the view
         return view('frontend.pages.form-show', compact('formFields'));
    }



}
