<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;


class CompaniesController extends Controller
{
public function Companies($company_name)
    {
        print_r($company_name);
}
}
