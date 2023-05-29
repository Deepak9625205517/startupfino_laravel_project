<?php



namespace App\Http\Controllers\Admin;



use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Http\Requests\Category\CreateCategoryRequest;

use App\Http\Requests\Category\UpdateCategoryRequest;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Category;

use Storage;

use File;



class CategoryController extends Controller

{

     /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         $this->middleware('permission:category-list|category-create|category-edit|category-delete|category-status', ['only' => ['index','show']]);

         $this->middleware('permission:category-create', ['only' => ['create','store']]);

         $this->middleware('permission:category-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:category-delete', ['only' => ['destroy']]);

         $this->middleware('permission:category-status', ['only' => ['status']]);

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)

    {

        $categories = Category::orderBy('id', 'desc')->get();

        return view('admin.categories.index')->with(compact(['categories']));

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = Category::where('status', 1)->get();

        return view('admin.categories.create')->with(compact(['categories']));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(CreateCategoryRequest $request)
    {
     

        $category                      = new Category;
        $category->name                = $request->name;
        $category->description         = addslashes($request->description);
        $category->short_description   = addslashes($request->short_description);
        $category->long_description    = addslashes($request->long_description);
        $category->sidebar_description = addslashes($request->sidebar_description);
        $category->slug                = SlugService::createSlug(Category::class, 'slug', $request->slug);
        $category->parent_id           = $request->parent_category ? $request->parent_category : 0;
        $category->meta_title          = $request->meta_title;
        $category->meta_keywords       = $request->meta_keywords;
        $category->meta_description    = $request->meta_description;

        if ($category->save() ) {
            \LogActivity::addToLog('Category added successfully.');
            $request->session()->flash('alert-success', "Category added successfully.");
            return redirect()->route('categories.index');
        }

        $request->session()->flash('alert-danger', "Unable to add category.");
        return redirect()->back();

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit(Category $category)

    {

        $categories = Category::where('status', 1)->get();

        return view('admin.categories.edit')->with(compact(['category', 'categories']));

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(UpdateCategoryRequest $request, Category $category)

    {

        
        $category->name                =  $request->name;
        $category->parent_id           =  $request->parent_category ? $request->parent_category : 0;
        $category->description         =  $request->description;
        $category->short_description   = $request->short_description;
        $category->long_description    = $request->long_description;
        $category->sidebar_description = $request->sidebar_description;
        $category->meta_title          = $request->meta_title;
        $category->meta_keywords       = $request->meta_keywords;
        $category->meta_description    = $request->meta_description;
        
        if($category->slug     != $request->slug)
        {
            $checkSlug        = Category::where('slug', $request->slug)->first();
            $checkSlug ? $category->slug = SlugService::createSlug(Category::class, 'slug', $request->slug) : $category->slug = $request->slug;
        }

        if ($category->save() ) {

            \LogActivity::addToLog('Category successfully updated.');

            $request->session()->flash('alert-success', "Category successfully updated.");

            return redirect()->route('categories.index');

        }

        $request->session()->flash('alert-success', "Unable to update category.");

        return redirect()->back();

    }



    public function Show(Category $category)

    {

        //dd($category->parent->name);

        return view('admin.categories.show', compact("category"));

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy(Request $request, Category $category)

    {

        if ($category->delete()) {

            \LogActivity::addToLog('Category successfully deleted.');

            $request->session()->flash('alert-success', "Category successfully deleted.");

            return redirect()->back();

        }

        $request->session()->flash('alert-danger', "Unable to delete category.");

        return redirect()->back();

    }



    public function changeStatus(Request $request, $id)

    {

        $category    = Category::where('id', $id)->first();



        if($category->status == '1'){

            $status = '0';

        }else{

            $status = '1';

        }

        $value     = array('status' => $status);

        Category::where('id', $id)->update($value);



        \LogActivity::addToLog('Category Status successfully changed!');

        $request->session()->flash('alert-success', "Status successfully changed!");

        return redirect()->back();

    }



    public function subCategoryList($id)

    {

        $parent  = Category::where('id', $id)->where('status', 1)->value('name');

        $records = Category::where('parent_id', $id)->where('status', 1)->get();

        return view('admin.categories.subcategory_list', compact('records', 'id', 'parent'));

    }

}