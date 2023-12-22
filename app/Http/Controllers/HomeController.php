<?php
namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    
       
       
        public function show($id)
        {
            $viewData = [];
            $product = Product::findOrFail($id);
            $viewData["title"] = $product->getName()." - Online Store";
            $viewData["subtitle"] = $product->getName()." - Product information";
            $viewData["product"] = $product;
            return view('home.show')->with("viewData", $viewData);
            }
public function index()
{

    $viewData = [];
    $viewData["title"] = "Products - Online Store";
    $viewData["subtitle"] = "List of products";
    $viewData["products"] = Product::all();
    return view('home.index')->with("viewData", $viewData);
$viewData = [];
$viewData["title"] = "Home Page - Online Store";
return view('home.index')->with("viewData", $viewData);
}
public function about()
{
$viewData = [];
$viewData["title"] = "About us - Online Store";
$viewData["subtitle"] = "About us";
$viewData["description"] = "This is an about page ...";
$viewData["author"] = "Developed by: Your Name";
return view('home.about')->with("viewData", $viewData);
}

}