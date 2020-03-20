<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Requesting;
use Log;
use App\Http\Controllers\Controller;
use Session;

// Database Models
use App\Models\Location\Continent;
use App\Models\Location\Country;
use App\Models\Location\State;
use App\Models\Location\City;
use App\Models\Dwelling\Comfort;
use App\Models\Dwelling\Service;
use App\Models\Dwelling\Currency;
use App\Models\Dwelling\Dwelling;
use App\Models\Dwelling\Image;
use App\Models\Dwelling\Video;


class ModifyDwellingController extends Controller
{
    public function modify_get(){
        Session::forget('images');
        Session::forget('videos');

        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');
        $dwelling = Dwelling::find(20);
        $images = Dwelling::find(20)->images;
        $videos = Dwelling::find(20)->videos;
        $dwelling['images'] = $images;
        $dwelling['videos'] = $videos;


        return view('dwelling_section.modify_section.modify',compact('continents','countries','states','cities','comforts','services','currency','dwelling'));
    }

    public function modify_dwelling(Request $request){
        $validations = [
            'continent_select_sm' =>  'required',
            'country_select_sm' =>    'required',
            'state_select_sm' =>      'required',
            'city_select_sm' =>       'required',
            'checkbox_dropdown_comfort_sm' => 'required',            
            'services_publish_dwelling_dropdown_sm' => 'required',                          
            'other_services_choice_sm' => '',                          
            'input_price' => 'required|numeric',                          
            'other_currency_input' => '',                          
            'name_contact' => 'required|regex:/^[a-zA-Z\s]*$/',                          
            'lastname_contact' => 'required|regex:/^[a-zA-Z\s]*$/',                          
            'email_contact' => 'required|email',                          
            'phone_checkbox' => 'required',                          
            'contact_days_checkbox' => 'required',                          
            'contact_hour_array' => 'required',                          
        ];
        if($request->get('other_services_choice_sm') != 1){
            $validations['other_services_choice_sm'] = 'required|regex:/^[a-zA-Z\s]*$/';
        }
        if($request->get('other_currency_input') != 1){
            $validations['other_currency_input'] = 'required|regex:/^[a-zA-Z\s]*$/';
        }
        $validator = Validator::make($request->all(), $validations);
        if ($validator->fails()){                
            return response()->json(['errors'=>$validator->getMessageBag()]);
        }else{
            $this->updateDwelling($request);
            return response()->json(['success' => 'success!']);
        }
    }

    private function updateDwelling($data){
        $services_dropdown = $data['services_publish_dwelling_dropdown_sm'];
        foreach($services_dropdown as $key => $value){
            if($value === 'other'){
                $services_dropdown[$key] = '5';
                break;
            }
        }
        $services = [
            'array' => $services_dropdown,
            'other' => $data['other_services_choice_sm']
        ];

        $comforts = [
            'array' => $data['checkbox_dropdown_comfort_sm']
        ];

        $dwelling = Dwelling::find($data['id']);
        $dwelling->continent_id = $data['continent_select_sm'];
        $dwelling->country_id = $data['country_select_sm'];
        $dwelling->state_id = $data['state_select_sm'];
        $dwelling->city_id = $data['city_select_sm'];
        $dwelling->zone_id = 1;
        $dwelling->user_id = 13;
        $dwelling->enable = 1;
        $dwelling->status = $data['selling_option'];
        $dwelling->property_type = $data['tipo_inmueble'];
        $dwelling->rooms = $data['counter_room'];
        $dwelling->bathrooms = $data['counter_bath'];
        $dwelling->parking = $data['counter_park'];
        $dwelling->comforts = $comforts;
        $dwelling->services = $services;
        $dwelling->details = $data['dwelling_other_details'];
        $dwelling->transport_details = $data['whats_next_to_dwelling'];
        $dwelling->location_details = $data['precise_dwelling_location'];
        $dwelling->price = $data['input_price'];
        $dwelling->currency_id = $data['currency_select'] === "other" ? 3 : $data['currency_select'];
        //Contact data
        $dwelling->contact_name = $data['name_contact'];
        $dwelling->contact_lastname = $data['lastname_contact'];
        $dwelling->contact_email = $data['email_contact'];
        $dwelling->contact_mobilenumber = $data['mobile_phone'];
        $dwelling->contact_landlinenumber = $data['landline_phone'];
        $dwelling->contact_landlinenumberEXT = $data['ext_landline_phone'];
        $dwelling->contact_days = $data['contact_days_checkbox'];
        // Compute hour based in 'am' or 'pm'
        $hour_from_24 = $data['contact_hour_array'][1] === 'pm' ? 12 : 0;
        $hour_from_24 += $data['contact_hour_array'][0];
        // $hour_to_24 = intval($data['contact_hour_array'][2]) + $data['contact_hour_array'][3] === 'pm' ? 12 : 0;
        $hour_to_24 = $data['contact_hour_array'][3] === 'pm' ? 12 : 0;
        $hour_to_24 += $data['contact_hour_array'][2];
        $dwelling->contact_hourfrom = $hour_from_24;
        $dwelling->contact_hourto = $hour_to_24;
        // Insert new dwelling
        $dwelling->save();
        // Insert images
        if(Session::has('images')){
            $images = Session::get('images');
            foreach($images as $key => $image){
                $new_image = new Image;
                $new_image->name = $image['name'];
                $new_image->url = $image['url'];
                $new_image->format = $image['format'];
                $dwelling->images()->save($new_image);
            }
        }
        if(Session::has('videos')){
            $videos = Session::get('videos');
            // Insert videos
            foreach($videos as $key => $video){
                $new_video = new Video;
                $new_video->name = $video['name'];
                $new_video->url = $video['url'];
                $new_video->format = $video['format'];
                $dwelling->videos()->save($new_video);
            }
        }
    }
}