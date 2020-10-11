<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catering_package;

class Catering_packageController extends Controller
{
    public function cateringPackageInsert()
    {
        $cpackage = new Catering_package();
        $cpackage->p_name = "Menu Three";
        $cpackage->description = "dasdasdada";
        $cpackage->price = "3500.00";

        $cpackage->save();

        return "package has been added";
    }

    public function showAllPackages()
    {
        $cpackage = Catering_package::all();
        return view('showcatering', ['cpackages' => $cpackage]);
    }

    public function getOnePackage($id)
    {
        $cpackage = Catering_package::findOrFail($id);
        return view('confirmcatering', ['cpackages' => $cpackage]);
    }
}
