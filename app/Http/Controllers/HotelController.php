<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    private $HotelModel;

    public function __construct(Hotel $HotelModel) {
        $this->HotelModel = $HotelModel;
    }

    public function getValuesFromdb() {

        $credentials = $this->HotelModel->getValues();

        return response()->json($credentials);
    }

    public function getValuesByFilter(Request $request)
    {

        $countryName = $request->input('country_name');
        $city = $request->input('city');
        $gridNumber = $request->input('grid_number');
        $uniqueId = $request->input('unique_id');
        $hotelName = $request->input('name');
        $inputs = $request->input('validation');
        $credentials = $this->HotelModel->getFilterValues(
            $countryName,
            $city,
            $gridNumber,
            $uniqueId,
            $hotelName,
            $inputs
        );
        return response()->json($credentials);
    }

    public function updateRows(Request $request){
        $row = $request->all();
        $updatedRow =  $this->HotelModel->updatedHotelMasterDb($row);
        return response()->json($updatedRow);
    }
}
