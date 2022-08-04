<?php

namespace App\Http\Controllers;

use App\Filters\Filter;
use App\Models\Brand;
use App\Models\CarModel;
use App\Models\Drive;
use App\Models\Motor;
use Illuminate\Http\Request;

class CatalogController extends Controller
{

    public function index(Filter $request)
    {
        $motors = Motor::get();
        $drives = Drive::get();
        $models = Brand::with(['car_model' => function ($query) use ($request) {
            $query->filter($request);
        }])->get();



        return view('index', ['models' => $models, 'motors' => $motors, 'drives' => $drives]);
    }
    public function brand(string $brand)
    {

        $models = CarModel::whereIn('brand_id', $this->getBrand($brand))->with('brand')->get();

        return view('brand', ['models' => $models]);
    }
    public function model(string $brand, string $model)
    {
        $models = CarModel::whereIn('brand_id', $this->getBrand($brand))->where('name', $model)->with('brand')->get();

        return view('model', ['models' => $models]);
    }
    private function getBrand($name)
    {
        return  Brand::where('name', $name)->pluck('id');
    }
}
