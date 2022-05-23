<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Services\Form\SaverFile;
use App\Http\Requests\StoreContactForm;


class ContactFormsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContactForm $request, SaverFile $saverFile)
    {
        $file = $request->file('file');
        $fileSrc = $saverFile->save("contactForm", $file);

        $contactForm = new ContactForm;
        $contactForm->name = $request->name;
        $contactForm->email = $request->email;
        $contactForm->phone = $request->phone;
        $contactForm->message = $request->message;
        $contactForm->file = $fileSrc;
        $contactForm->save();

        return [
            "status" => true,

        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
