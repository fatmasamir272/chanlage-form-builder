<?php

namespace App\Http\Controllers;

use App\Models\form;
use Illuminate\Http\Request;
use App\Models\FormSubmission;
use Illuminate\Support\Facades\Validator;

class FormSubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $forms = FormSubmission::orderBy('id', 'DESC')->paginate('10');
        return view('admin.forms.index')->with('forms', $forms);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.forms.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'formData' => 'required',
            'form_title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
        $formData = $request->input('formData');

        FormSubmission::create([
            'form_data' => json_encode($formData),
            'form_title' => $request->form_title,
            'user_id' => Auth()->user()->id,
        ]);
        return response()->json(['success' => true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $form = FormSubmission::find($id);
        if ($form) {
            return view('admin.forms.edit')->with('form', $form);
        } else {
            return view('admin.forms.index')->with('error', 'form not found');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $form = FormSubmission::find($id);
        $validator = Validator::make($request->all(), [
            'formData' => 'required',
            'form_title' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'error' => $validator->errors()->all()
            ]);
        }
        $formData = $request->input('formData');

        $form->form_data=json_encode($formData);
        $form->form_title=$request->form_title;
        $form->save();
        return response()->json(['success' => true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $form = FormSubmission::find($id);
        if ($form) {
            $status = $form->delete();
            if ($status) {
                request()->session()->flash('success', 'form successfully deleted');
            } else {
                request()->session()->flash('error', 'Error, Please try again');
            }
            return redirect()->route('forms.index');
        } else {
            request()->session()->flash('error', 'form not found');
            return redirect()->back();
        }
    }

    public function formStore(Request $request)
    {
        // return $request->all();
        $form = FormSubmission::where('code', $request->code)->first();
        // dd($form);
        if (!$form) {
            request()->session()->flash('error', 'Invalid form code, Please try again');
            return back();
        }
        if ($form) {
            $total_price = Cart::where('user_id', auth()->user()->id)->where('order_id', null)->sum('price');
            // dd($total_price);
            session()->put('form', [
                'id' => $form->id,
                'code' => $form->code,
                'value' => $form->discount($total_price)
            ]);
            request()->session()->flash('success', 'form successfully applied');
            return redirect()->back();
        }
    }
}
