<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListOfCategory;

class ListOfCategoryController extends Controller
{
    /**
     @return void
     *
     *
     */
    public function index(){
      $categories = ListOfCategory::all();

      // all()=> get all mais on ne peut pas orgasiser
      //get ()=> get all en ayant la possibilité d'organiser ex: orderBy
      //paginate()=>
      return view("pages.category", compact("categories"));
    }
    /**
     * store category in BDD
     */
      public function store(Request $request){
        // dd($request->all());
        // 1 je valide mon formulaire

        $request->validate([
          "category" => "required|string|max:20|min:3"
        ]);
        // je stock les valeurs du form dans une variable
        $data = [
          "category" => $request->category,
          "created_at" => now()
        ];
        //j'envoie dans la BDD en utilisant le model de la BD avec la methode create
        ListOfCategory::create($data);

        // redirection
        return back()->with("status", "Category added");
    }
    /**
     * Delete category
     *
     * @param [type] $id
     * @return void
     */
    public function delete($id){
      $category = ListOfCategory::find($id);
      if(!$category) {
        abort (404);

      }
      $category->delete();
      return back()->with('status', "Category delete");
    }
    /**
     * send the view to edit form with the good caregory
     *
     * @param [type] $id
     * @return void
     */
    public function edit($id){
      $category = ListOfCategory::find($id);
      return view("pages.update-category", compact('category'));
    }
    /**
     * update the current category and store in BDD
     *
     */
    public function update(Request $request, $id){
      $category = ListOfCategory::find($id);
      
      //validation du formulaire
      $request->validate([
        'category' =>  "required|string|max:20|min:1"
      ]);
    }
}
