<?php

namespace App\Http\Controllers;

use App\Models\Hotel;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    private $HotelModel;

    public function __construct(Hotel $HotelModel)
    {
        $this->HotelModel = $HotelModel;
    }

    public function getValuesFromdb()
    {

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
        $credentials = $this->HotelModel->getHotelDbByFilter(
            $countryName,
            $city,
            $gridNumber,
            $uniqueId,
            $hotelName,
            $inputs
        );
        return response()->json($credentials);
    }

    public function getValuesByReference(Request $request)
    {
        $uniqueId = $request->input('unique_id');
        $supplierId = $request->input('primary_id');
        $referencedValues = $this->HotelModel->getHotelDbByref($uniqueId, $supplierId);
        return response()->json($referencedValues);
    }

    public function getValuesByRow(Request $request)
    {

        $uniqueId = $request->input('unique_id');
        $ind = $request->input('ind');

        $data = $this->HotelModel->UpdateHotelDbByRow($uniqueId, $ind);
        return response()->json($data);
    }

    public function DeleteRowsFromDb(Request $request)
    {
        $id = $request->all();
        $data = $this->HotelModel->DeleteRows($id);

        return $data;
    }
}
