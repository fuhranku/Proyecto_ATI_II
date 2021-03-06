<?php

namespace App\Http\Controllers\Dwelling;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Requesting;
use Response;
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
use Log;

class SearchDwellingController extends Controller
{
    public function search_get(){

        Session::forget("session_query");
        $search_type = 1; // 0: Búsqueda publicaciones propias de usuario logueado 1: Búsqueda Regular
        $continents = Continent::all()->sortBy('name');
        $countries = Country::all()->sortBy('name');
        $states = State::all()->sortBy('name');
        $cities = City::all()->sortBy('name');
        $comforts = Comfort::all()->sortBy('name');
        $services = Service::all()->sortBy('name');
        $currency = Currency::all()->sortBy('name');

        return view('dwelling_section.search_section.search',compact('continents','countries','states','cities','comforts','services','currency','search_type'));
    }

    public function keyword_search(Request $request){

        $keyword = $request->get('keyword');

        $dwelling = new \stdClass();

        $dwelling->comforts = DB::table('comforts')
                                ->get();

        $dwelling->services = DB::table('services')
                                ->get();

        $dwelling->images_url = DB::table('images')
                                ->get();
        
        $dwelling->dwellings = DB::table('dwellings')
                        ->join('countries','dwellings.country_id','=','countries.id')
                        ->join('states','dwellings.state_id','=','states.id')
                        ->join('cities','dwellings.city_id','=','cities.id')
                        ->select('dwellings.*',
                                'countries.name as country_name',
                                'states.name as state_name',
                                'cities.name as city_name')
                        ->where('countries.name', '=',$keyword)
                        ->orWhere('states.name', '=',$keyword)
                        ->orWhere('cities.name', '=',$keyword)
                        ->get();
        
        // Add images
        $json_dwelling = json_decode(json_encode($dwelling->dwellings), true);
        //$json_dwelling = json_decode($json_dwelling);
        foreach ($json_dwelling as $key => $value){
            $currency_id = $json_dwelling[$key]['currency_id'];
            $currency_id == 3 ? $json_dwelling[$key]['currency_name'] = $json_dwelling[$key]['currency_name'] :
                                $json_dwelling[$key]['currency_name'] = Currency::find($currency_id)->name;
            $json_dwelling[$key]['images'] = Dwelling::find($json_dwelling[$key]['id'])->images;
        }
        // Add videos
        foreach ($json_dwelling as $key => $value){
            $json_dwelling[$key]['videos'] = Dwelling::find($json_dwelling[$key]['id'])->videos;
        }
        $dwelling->dwellings = $json_dwelling;
        return Response::json(json_encode($dwelling));
    }

    public function quick_search(Request $request){

        $country = $request->get('country');
        $state = $request->get('state');
        $status = $request->get('status');
        $property_type = $request->get('property_type');

         //VALIDATE INPUTS
         $validations = [];
         $validations['country'] = 'required';
         $validations['state'] = 'required';
         $validations['status'] = 'required';
         $validations['property_type'] = 'required';
 
         // Validate what needs to be validated
         $validator = Validator::make($request->all(), $validations);
         if ($validator->fails()){                
             return response()->json(['errors'=>$validator->getMessageBag()]);
         }

        $dwelling = new \stdClass();

        $dwelling->comforts = DB::table('comforts')
                                ->get();

        $dwelling->services = DB::table('services')
                                ->get();

        $dwelling->images_url = DB::table('images')
                                ->get();
        

        if($status == 2){ //STATUS BOTH

            if($property_type == 2){ //PROPERTY TYPE BOTH

                $match = ['dwellings.country_id' => $country, 
                'dwellings.state_id' => $state, 
                ];
    
                $dwelling->dwellings = DB::table('dwellings')
                                ->join('countries','dwellings.country_id','=','countries.id')
                                ->join('states','dwellings.state_id','=','states.id')
                                ->select('dwellings.*',
                                        'countries.name as country_name',
                                        'states.name as state_name')
                                ->where($match)
                                ->get();
    
            }
            else{
    
                $match = ['dwellings.country_id' => $country, 
                'dwellings.state_id' => $state, 
                'dwellings.property_type' => $property_type
                ];
    
                $dwelling->dwellings = DB::table('dwellings')
                                ->join('countries','dwellings.country_id','=','countries.id')
                                ->join('states','dwellings.state_id','=','states.id')
                                ->select('dwellings.*',
                                        'countries.name as country_name',
                                        'states.name as state_name')
                                ->where($match)
                                ->get();
    
            }
        }
        else{
            if($property_type == 2){ //all kind of property type

                $match = ['dwellings.country_id' => $country, 
                'dwellings.state_id' => $state, 
                'dwellings.status' => $status,
                ];
    
                $dwelling->dwellings = DB::table('dwellings')
                                ->join('countries','dwellings.country_id','=','countries.id')
                                ->join('states','dwellings.state_id','=','states.id')
                                ->select('dwellings.*',
                                        'countries.name as country_name',
                                        'states.name as state_name')
                                ->where($match)
                                ->get();
    
            }
            else{
    
                $match = ['dwellings.country_id' => $country, 
                'dwellings.state_id' => $state, 
                'dwellings.status' => $status,
                'dwellings.property_type' => $property_type
                ];
    
                $dwelling->dwellings = DB::table('dwellings')
                                ->join('countries','dwellings.country_id','=','countries.id')
                                ->join('states','dwellings.state_id','=','states.id')
                                ->select('dwellings.*',
                                        'countries.name as country_name',
                                        'states.name as state_name')
                                ->where($match)
                                ->get();
    
            }
        }
        
        // Add images
        $json_dwelling = json_decode(json_encode($dwelling->dwellings), true);
        //$json_dwelling = json_decode($json_dwelling);
        foreach ($json_dwelling as $key => $value){
            $currency_id = $json_dwelling[$key]['currency_id'];
            $currency_id == 3 ? $json_dwelling[$key]['currency_name'] = $json_dwelling[$key]['currency_name'] :
                                $json_dwelling[$key]['currency_name'] = Currency::find($currency_id)->name;
            $json_dwelling[$key]['images'] = Dwelling::find($json_dwelling[$key]['id'])->images;
        }
        // Add videos
        foreach ($json_dwelling as $key => $value){
            $json_dwelling[$key]['videos'] = Dwelling::find($json_dwelling[$key]['id'])->videos;
        }
        $dwelling->dwellings = $json_dwelling;
        return Response::json(json_encode($dwelling));
    }

    public function detailed_search(Request $request){

        $continent = $request->get('continent');
        $country = $request->get('country');
        $state = $request->get('state');
        $city = $request->get('city');
        $status = $request->get('status');
        $property_type = $request->get('property_type');
        $room = $request->get("room");
        $bathroom = $request->get("bathroom");
        $park = $request->get("park");
        $comfort = $request->get("comfort");
        $service = $request->get("service");
        $active_price = $request->get("active_price");
        $minimum_price = $request->get("minimum_price");
        $maximum_price = $request->get("maximum_price");

        //VALIDATE INPUTS
        $validations = [];
        $validations['continent'] = 'required';
        $validations['country'] = 'required';
        $validations['state'] = 'required';
        $validations['city'] = 'required';
        $validations['status'] = 'required';
        $validations['property_type'] = 'required';

        if($active_price == 1){
            $validations['minimum_price'] = 'required';
            $validations['maximum_price'] = 'required';
        }

        // Validate what needs to be validated
        $validator = Validator::make($request->all(), $validations);
        if ($validator->fails()){                
            return response()->json(['errors'=>$validator->getMessageBag()]);
        }

        $dwelling = new \stdClass();

        $dwelling->comforts = DB::table('comforts')
                                ->get();

        $dwelling->services = DB::table('services')
                                ->get();

        $dwelling->images_url = DB::table('images')
                                ->get();

        

        if($status == 2){ //STATUS BOTH
            
            if($property_type == 2){ //all kind of property type
        
                if($active_price == 1){ //case searching with price max min

                    $dwelling->dwellings = DB::table('dwellings')
                                    ->join('continents','dwellings.continent_id','=','continents.id')
                                    ->join('countries','dwellings.country_id','=','countries.id')
                                    ->join('states','dwellings.state_id','=','states.id')
                                    ->select('dwellings.*',
                                            'countries.name as country_name',
                                            'states.name as state_name')
                                    ->where('dwellings.continent_id', '=',$continent)
                                    ->where('dwellings.country_id', '=', $country) 
                                    ->where('dwellings.state_id','=', $state)
                                    ->where('dwellings.city_id','=',$city)
                                    ->where('dwellings.rooms','=', $room)
                                    ->where('dwellings.bathrooms','=', $bathroom)
                                    ->where('dwellings.parking','=',$park)
                                    ->where('dwellings.price','<=',$maximum_price)
                                    ->where('dwellings.price','>=',$minimum_price)
                                    ->whereJsonContains('dwellings.comforts->array', $comfort)
                                    ->whereJsonContains('dwellings.services->array', strval($service))
                                    ->get();
        
                }
                else if($active_price == 2){ //case searching any price
                    $dwelling->dwellings = DB::table('dwellings')
                                    ->join('continents','dwellings.continent_id','=','continents.id')
                                    ->join('countries','dwellings.country_id','=','countries.id')
                                    ->join('states','dwellings.state_id','=','states.id')
                                    ->select('dwellings.*',
                                            'countries.name as country_name',
                                            'states.name as state_name')
                                    ->where('dwellings.continent_id', '=',$continent)
                                    ->where('dwellings.country_id', '=', $country) 
                                    ->where('dwellings.state_id','=', $state)
                                    ->where('dwellings.city_id','=',$city)
                                    ->where('dwellings.rooms','=', $room)
                                    ->where('dwellings.bathrooms','=', $bathroom)
                                    ->where('dwellings.parking','=',$park)
                                    ->whereJsonContains('dwellings.comforts->array', $comfort)
                                    ->whereJsonContains('dwellings.services->array', strval($service))
                                    ->get();
        
                }
            }
            else{
    
                if($active_price == 1){ //case searching with price max min
    
                    $dwelling->dwellings = DB::table('dwellings')
                                    ->join('continents','dwellings.continent_id','=','continents.id')
                                    ->join('countries','dwellings.country_id','=','countries.id')
                                    ->join('states','dwellings.state_id','=','states.id')
                                    ->select('dwellings.*',
                                            'countries.name as country_name',
                                            'states.name as state_name')
                                    ->where('dwellings.continent_id', '=',$continent)
                                    ->where('dwellings.country_id', '=', $country) 
                                    ->where('dwellings.state_id','=', $state)
                                    ->where('dwellings.city_id','=',$city)
                                    ->where('dwellings.property_type','=',$property_type)
                                    ->where('dwellings.rooms','=', $room)
                                    ->where('dwellings.bathrooms','=', $bathroom)
                                    ->where('dwellings.parking','=',$park)
                                    ->where('dwellings.price','<=',$maximum_price)
                                    ->where('dwellings.price','>=',$minimum_price)
                                    ->whereJsonContains('dwellings.comforts->array', $comfort)
                                    ->whereJsonContains('dwellings.services->array', strval($service))
                                    ->get();
        
                }
                else if($active_price == 2){ //case searching any price
                    $dwelling->dwellings = DB::table('dwellings')
                                    ->join('continents','dwellings.continent_id','=','continents.id')
                                    ->join('countries','dwellings.country_id','=','countries.id')
                                    ->join('states','dwellings.state_id','=','states.id')
                                    ->select('dwellings.*',
                                            'countries.name as country_name',
                                            'states.name as state_name')
                                    ->where('dwellings.continent_id', '=',$continent)
                                    ->where('dwellings.country_id', '=', $country) 
                                    ->where('dwellings.state_id','=', $state)
                                    ->where('dwellings.city_id','=',$city)
                                    ->where('dwellings.property_type','=',$property_type)
                                    ->where('dwellings.rooms','=', $room)
                                    ->where('dwellings.bathrooms','=', $bathroom)
                                    ->where('dwellings.parking','=',$park)
                                    ->whereJsonContains('dwellings.comforts->array', $comfort)
                                    ->whereJsonContains('dwellings.services->array', strval($service))
                                    ->get();
        
                }
            }
        }
        else{

            if($property_type == 2){ //all kind of property type
        
                if($active_price == 1){ //case searching with price max min
    
                    $dwelling->dwellings = DB::table('dwellings')
                                    ->join('continents','dwellings.continent_id','=','continents.id')
                                    ->join('countries','dwellings.country_id','=','countries.id')
                                    ->join('states','dwellings.state_id','=','states.id')
                                    ->select('dwellings.*',
                                            'countries.name as country_name',
                                            'states.name as state_name')
                                    ->where('dwellings.continent_id', '=',$continent)
                                    ->where('dwellings.country_id', '=', $country) 
                                    ->where('dwellings.state_id','=', $state)
                                    ->where('dwellings.city_id','=',$city)
                                    ->where('dwellings.status','=',$status)
                                    ->where('dwellings.rooms','=', $room)
                                    ->where('dwellings.bathrooms','=', $bathroom)
                                    ->where('dwellings.parking','=',$park)
                                    ->where('dwellings.price','<=',$maximum_price)
                                    ->where('dwellings.price','>=',$minimum_price)
                                    ->whereJsonContains('dwellings.comforts->array', $comfort)
                                    ->whereJsonContains('dwellings.services->array', strval($service))
                                    ->get();
        
                }
                else if($active_price == 2){ //case searching any price
                    $dwelling->dwellings = DB::table('dwellings')
                                    ->join('continents','dwellings.continent_id','=','continents.id')
                                    ->join('countries','dwellings.country_id','=','countries.id')
                                    ->join('states','dwellings.state_id','=','states.id')
                                    ->select('dwellings.*',
                                            'countries.name as country_name',
                                            'states.name as state_name')
                                    ->where('dwellings.continent_id', '=',$continent)
                                    ->where('dwellings.country_id', '=', $country) 
                                    ->where('dwellings.state_id','=', $state)
                                    ->where('dwellings.city_id','=',$city)
                                    ->where('dwellings.status','=',$status)
                                    ->where('dwellings.rooms','=', $room)
                                    ->where('dwellings.bathrooms','=', $bathroom)
                                    ->where('dwellings.parking','=',$park)
                                    ->whereJsonContains('dwellings.comforts->array', $comfort)
                                    ->whereJsonContains('dwellings.services->array', strval($service))
                                    ->get();
        
                }
            }
            else{
    
                if($active_price == 1){ //case searching with price max min
    
                    $dwelling->dwellings = DB::table('dwellings')
                                    ->join('continents','dwellings.continent_id','=','continents.id')
                                    ->join('countries','dwellings.country_id','=','countries.id')
                                    ->join('states','dwellings.state_id','=','states.id')
                                    ->select('dwellings.*',
                                            'countries.name as country_name',
                                            'states.name as state_name')
                                    ->where('dwellings.continent_id', '=',$continent)
                                    ->where('dwellings.country_id', '=', $country) 
                                    ->where('dwellings.state_id','=', $state)
                                    ->where('dwellings.city_id','=',$city)
                                    ->where('dwellings.status','=',$status)
                                    ->where('dwellings.property_type','=',$property_type)
                                    ->where('dwellings.rooms','=', $room)
                                    ->where('dwellings.bathrooms','=', $bathroom)
                                    ->where('dwellings.parking','=',$park)
                                    ->where('dwellings.price','<=',$maximum_price)
                                    ->where('dwellings.price','>=',$minimum_price)
                                    ->whereJsonContains('dwellings.comforts->array', $comfort)
                                    ->whereJsonContains('dwellings.services->array', strval($service))
                                    ->get();
        
                }
                else if($active_price == 2){ //case searching any price

                    $dwelling->dwellings = DB::table('dwellings')
                                    ->join('continents','dwellings.continent_id','=','continents.id')
                                    ->join('countries','dwellings.country_id','=','countries.id')
                                    ->join('states','dwellings.state_id','=','states.id')
                                    ->select('dwellings.*',
                                            'countries.name as country_name',
                                            'states.name as state_name')
                                    ->where('dwellings.continent_id', '=',$continent)
                                    ->where('dwellings.country_id', '=', $country) 
                                    ->where('dwellings.state_id','=', $state)
                                    ->where('dwellings.city_id','=',$city)
                                    ->where('dwellings.status','=',$status)
                                    ->where('dwellings.property_type','=',$property_type)
                                    ->where('dwellings.rooms','=', $room)
                                    ->where('dwellings.bathrooms','=', $bathroom)
                                    ->where('dwellings.parking','=',$park)
                                    ->whereJsonContains('dwellings.comforts->array', $comfort)
                                    ->whereJsonContains('dwellings.services->array', strval($service))
                                    ->get();
        
                }
            }
        }
        
        // Add images
        $json_dwelling = json_decode(json_encode($dwelling->dwellings), true);
        //$json_dwelling = json_decode($json_dwelling);
            foreach ($json_dwelling as $key => $value){
                $currency_id = $json_dwelling[$key]['currency_id'];
                $currency_id == 3 ? $json_dwelling[$key]['currency_name'] = $json_dwelling[$key]['currency_name'] :
                                    $json_dwelling[$key]['currency_name'] = Currency::find($currency_id)->name;
                $json_dwelling[$key]['images'] = Dwelling::find($json_dwelling[$key]['id'])->images;
        }
        // Add videos
            foreach ($json_dwelling as $key => $value){
                $json_dwelling[$key]['videos'] = Dwelling::find($json_dwelling[$key]['id'])->videos;
        }
        $dwelling->dwellings = $json_dwelling;
        return Response::json(json_encode($dwelling));
    }
}