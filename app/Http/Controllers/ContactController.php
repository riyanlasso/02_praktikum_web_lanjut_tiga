<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact;


class ContactController extends Controller
{
    public function contact()
    {
        return redirect('https://www.educastudio.com/contact-us');
    }
}
