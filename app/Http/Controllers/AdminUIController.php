<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Continent;
use App\Country;
use App\City;
use App\Airline;
use App\Branch;
use App\Staff;

class AdminUIController extends Controller
{

    /* Shoa Dashboard Page */
    public function ShowDashboard() {
      return view('backend.backend-pages.admin-dashboard');
    }

    /* Show Continent Page */
    public function ShowContinent() {
      $continent = Continent::all();
      return view('backend.backend-pages.continent.admin-continent',[
                                                                      'continent' => $continent,
                                                                    ]);
    }

    /* Show Create Continent Page */
    public function ShowCreateContinent() {
      return view('backend.backend-pages.continent.admin-create-continent');
    }

    /* Show Edit Continent Page */
    public function ShowEditContinent($continent_id) {
      $continent = Continent::where('_id', $continent_id)->first();
      return view('backend.backend-pages.continent.admin-edit-continent',[
                                                                          'continent' => $continent,
                                                                         ]);
    }

    /* Show Country List */
    public function ShowCountry() {
      $country = Country::all();
      return view('backend.backend-pages.country.admin-country',[
                                                                  'country' => $country,
                                                                ]);
    }
    /* Show Create Country Page */
    public function ShowCreateCountry() {
      $continent = Continent::all();
      return view('backend.backend-pages.country.admin-create-country',[
                                                                        'continent' => $continent,
                                                                       ]);
    }

    /* Show Edit Country Page */
    public function ShowEditCountry($country_id) {
      $continent = Continent::all();
      $country = Country::where('_id',$country_id)->first();
      return view('backend.backend-pages.country.admin-edit-country',[
                                                                      'country' => $country,
                                                                      'continent' => $continent,
                                                                     ]);
    }

    /* Show City List */
    public function ShowCity()  {
      $city = City::all();
      return view('backend.backend-pages.city.admin-city',[
                                                            'city' => $city,
                                                          ]);
    }

    /* Show Create City Page */
    public function ShowCreateCity() {
      $country = Country::all();
      return view('backend.backend-pages.city.admin-create-city',[
                                                                  'country' => $country,
                                                                 ]);
    }

    /* Show Edit City Page */
    public function ShowEditCity($city_id)  {
      $country = Country::all();
      $city = City::where('_id',$city_id)->first();
      return view('backend.backend-pages.city.admin-edit-city',[
                                                                'country' => $country,
                                                                'city' => $city,
                                                               ]);
    }

    /* Show Airline List */
    public function ShowAirline() {
      $airline = Airline::all();
      return view('backend.backend-pages.airline.admin-airline',[
                                                                  'airline' => $airline,
                                                                ]);
    }

    /* Show Create Airline Page */
    public function ShowCreateAirline() {
      return view('backend.backend-pages.airline.admin-create-airline');
    }

    /* Show Edit Airline Page */
    public function ShowEditAirline($airline_id) {
      $airline = Airline::where('_id',$airline_id)->first();
      return view('backend.backend-pages.airline.admin-edit-airline',[
                                                                      'airline' => $airline,
                                                                     ]);
    }

    /* Show Branch List */
    public function ShowBranch()  {
      $branch = Branch::all();
      return view('backend.backend-pages.branch.admin-branch',[
                                                                'branch' => $branch,
                                                              ]);
    }

    /* Show Create Branch Page */
    public function ShowCreateBranch()  {
      return view('backend.backend-pages.branch.admin-create-branch');
    }

    /* Show Edit Branch Page */
    public function ShowEditBranch($branch_id)  {
      $branch = Branch::where('_id',$branch_id)->first();
      return view('backend.backend-pages.branch.admin-edit-branch',[
                                                                    'branch' => $branch,
                                                                   ]);
    }

    /* Show Staff List */
    public function ShowStaff() {
      $staff = Staff::all();
      return view('backend.backend-pages.staff.admin-staff',[
                                                              'staff' => $staff,
                                                            ]);
    }

    /* Show Create Staff Page */
    public function ShowCreateStaff() {
      $branch = Branch::all();
      return view('backend.backend-pages.staff.admin-create-staff',[
                                                                    'branch' => $branch,
                                                                   ]);
    }

    /* Show Edit Staff Page */
    public function ShowEditStaff($staff_id)  {
      $branch = Branch::all();
      $staff = Staff::where('_id',$staff_id)->first();
      return view('backend.backend-pages.staff.admin-edit-staff',[
                                                                  'staff' => $staff,
                                                                  'branch' => $branch,
                                                                 ]);
    }

}
