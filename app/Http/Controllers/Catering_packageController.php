<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catering_package;

class Catering_packageController extends Controller
{
    // To navigate to page where admin adds new packages
    public function create()
    {
        return view('cpackage.create');
    }
    // Save the packages added by admin
    public function cateringPackageInsert()
    {
        $cpackage = new Catering_package();
        $cpackage->p_name= request('p_name');
        $cpackage->description= request('description');
        $cpackage->price= request('price');
        $cpackage->save();
        
        return redirect('/showadmin')->with('success', 'Catering_package saved!');
        
    }
     //customer'view page to select package(catering home page)
    public function showAllPackages()
    {
        $cpackage = Catering_package::all();
        return view('cpackage.showcatering', ['cpackages' => $cpackage]);
    }
    // To show all packages to admin enable admin to do CRUD...
    public function adminShowAllPackage(){
        $cpackage = Catering_package::all();
        return view('cpackage.showcateringadmin', ['cpackages' => $cpackage]);
    }

    // The function pamal created, use to shift to user's catering booking page
    // This is the page where cutomer enter detail to book catering serveice
    public function getOnePackage($id)
    {
        $cpackage = Catering_package::findOrFail($id);
        return view('catering_orders.confirmcatering', ['cpackages' => $cpackage]);
    }


    
    // Code for editing a package
    public function edit($id)
    {
        $cpackage = Catering_package::find($id);
        return view('cpackage.edit', ['cpackages' => $cpackage]);
    }

    // Update the edited package
    public function update(Request $request, $id)
    {
       
        $cpackage = Catering_package::find($id);
        $cpackage->p_name =  $request->get('p_name');
        $cpackage->description = $request->get('description');
        $cpackage->price = $request->get('price');
        $cpackage->save();
        return redirect('/showadmin')->with('success', 'Package updated!');
    }

    // To delete a package
    public function destroy($id)
    {
        $cpackage = Catering_package::find($id);
        $cpackage->delete();
        return redirect('/showadmin')->with('success', 'Package deleted!');
    }
}
