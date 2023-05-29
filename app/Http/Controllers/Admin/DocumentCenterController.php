<?php



namespace App\Http\Controllers\Admin;



use Cviebrock\EloquentSluggable\Services\SlugService;

use App\Http\Requests\Document\CreateDocumentRequest;

use App\Http\Requests\Document\UpdateDocumentRequest;

use App\Http\Controllers\Controller;

use App\Models\SubscriptionUser;

use App\Models\DocumentCenter;

use Illuminate\Http\Request;

use App\Models\Favourite;

use App\Models\Category;

use Storage;

use File;

use Auth;

use Cache;



class DocumentCenterController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    function __construct()

    {

         $this->middleware('permission:document-center-list|document-center-create|document-center-edit|document-center-delete', ['only' => ['index','show']]);

         $this->middleware('permission:document-center-create', ['only' => ['create','store']]);

         $this->middleware('permission:document-center-edit', ['only' => ['edit','update']]);

         $this->middleware('permission:document-center-delete', ['only' => ['destroy']]);



           ini_set('memory_limit', '128M');

           ini_set('max_execution_time', '3000');

           ini_set('request_terminate_timeout', '3000');

    }



    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index(Request $request)
    {
        
        $records = DocumentCenter::select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'pdf', 'file_extension', 'file_size', 'page', 'description', 'status')
        ->orderBy('id', 'desc')
        ->paginate(10);

        foreach($records as $k => $v)
        {
            $records[$k]['category'] = Category::select('id', 'name')->where('id', $v->category_id)->first();
            $records[$k]['subcategory'] = Category::select('id', 'name')->where('id', $v->subcategory_id)->first();
        }


        if($request->ajax()){
            
            $records = DocumentCenter::query()
                ->when($request->seach_term, function($q)use($request){
                    $q->where('id', 'like', '%'.$request->seach_term.'%')
                    ->orWhere('slug', 'like', '%'.$request->seach_term.'%')
                    ->orWhere('document_name', 'like', '%'.$request->seach_term.'%');
                })
                ->when($request->status, function($q)use($request){
                    $q->where('status',$request->status);
                })
                ->select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'pdf', 'file_extension', 'file_size', 'page', 'description', 'status')
                ->orderBy('id', 'desc')->paginate(10);
           
            foreach($records as $k => $v)
            {
                $records[$k]['category'] = Category::where('id', $v->category_id)->first();
                $records[$k]['subcategory'] = Category::where('id', $v->subcategory_id)->first();
            }
            
            return view('admin.document_center.include.list', compact('records'))->render();
        }

        $count = $records->count();
        
        return view('admin.document_center.index', compact('records', 'count'));

    }

    public function paginationAjax(Request $request)
    {
        
        if($request->ajax())
        {
            $records = DocumentCenter::query()->with(['category'=>function($c){$c->select('id', 'name');}, 'subcategory'=>function($sc){$sc->select('id', 'name');}])->select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'pdf', 'file_extension', 'file_size', 'page', 'description', 'status')->orderBy('id', 'desc')->paginate(10);
            $count = DocumentCenter::query()->with(['category'=>function($c){$c->select('id', 'name');}, 'subcategory'=>function($sc){$sc->select('id', 'name');}])->select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'pdf', 'file_extension', 'file_size', 'page', 'description', 'status')->orderBy('id', 'desc')->count();

            return view('admin.document_center.include.list', compact('records', 'count'))->render();
        }
    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        $categories = Category::where('status', 1)->where('parent_id', 0)->get();

        return view('admin.document_center.create')->with(compact(['categories']));

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @return \Illuminate\Http\Response

     */

    public function store(CreateDocumentRequest $request)

    {

        $image = $pdf = $extesion = '';

        

        if($request->hasFile('image'))

        {

            $imageextesion = time().'.'.$request->image->extension();  

     

            $image = Storage::disk('s3')->put('document/image', $request->image);

            $image = Storage::disk('s3')->url($image);

        }



        if($request->hasFile('pdf'))

        {

            $file      = $request->file('pdf');

            $file_size = $request->file('pdf')->getSize();

            $filename  = $file->getClientOriginalName();

            $extesion  = $file->getClientOriginalExtension();



            $imageName = time().'.'.$request->pdf->extension();  

     

            $pdf = Storage::disk('s3')->put('document/pdf', $request->pdf);

            $pdf = Storage::disk('s3')->url($pdf);

        }

        

        $obj = new DocumentCenter;

        $obj->category_id    = $request->category_id;

        $obj->subcategory_id = $request->subcategory_id;

        $obj->slug           = SlugService::createSlug(DocumentCenter::class, 'slug', $request->slug);

        $obj->document_name  = $request->document_name;

        $obj->image          = $image;

        $obj->pdf            = $pdf;

        $obj->file_extension = $extesion;

        $obj->user_id        = Auth::user()->id;

        $obj->user_name      = Auth::user()->name;

        $obj->file_size      = $file_size;

        $obj->page           = $request->page;

        $obj->price          = $request->price;

        $obj->description    = $request->description;
        $obj->meta_title     = $request->meta_title;
        $obj->meta_keywords  = $request->meta_keywords;
        $obj->meta_description = $request->meta_description;



        if ($obj->save() ) {

            \LogActivity::addToLog('Document added successfully.');

            // return back()->with('alert-success', "Document added successfully.");

            // return redirect()->route('document-centers.index');

            return back()->with('alert-success', "Document added successfully.");

        }



        return back()->with('alert-danger', "Unable to add document.");

        

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit(DocumentCenter $DocumentCenter)

    {

        $categories    = Category::where('status', 1)->get();

        $subcategories = Category::where('parent_id', $DocumentCenter->category_id)->where('status', 1)->get();

        return view('admin.document_center.edit')->with(compact(['DocumentCenter', 'categories', 'subcategories']));

    }



     /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\Request  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(UpdateDocumentRequest $request, DocumentCenter $DocumentCenter)

    {

        $image = $pdf = $extesion = '';

        



            if($request->hasFile('image'))

            {

                $oldimage = DocumentCenter::where('id', $DocumentCenter->id)->value('image');

                $arr = explode("/", $oldimage);

                Storage::disk('s3')->delete('/document/image/' . $arr[count($arr) - 1]);



                $imageName = time().'.'.$request->image->extension();  

     

                $image = Storage::disk('s3')->put('/document/image', $request->image);

                $image = Storage::disk('s3')->url($image);

            }

            else

            {

                $imagenull = DocumentCenter::where('id', $DocumentCenter->id)->value('image');

            }



        if($request->hasFile('pdf'))

        {

            $oldpdf = DocumentCenter::where('id', $DocumentCenter->id)->value('pdf');

            $arr = explode("/", $oldpdf);

            Storage::disk('s3')->delete('/document/pdf/' . $arr[count($arr) - 1]);



            $file      = $request->file('pdf');

            $file_size = $request->file('pdf')->getSize();

            $filename  = $file->getClientOriginalName();

            $extesion  = $file->getClientOriginalExtension();

            

            $pdfName = time().'.'.$request->pdf->extension();  

     

                $pdf = Storage::disk('s3')->put('/document/pdf', $request->pdf);

                $pdf = Storage::disk('s3')->url($pdf);



            $DocumentCenter->file_extension = $extesion;

            $DocumentCenter->file_size      = $file_size;

        }else{

            $pdfnull = DocumentCenter::where('id', $DocumentCenter->id)->value('pdf');

        }



        $DocumentCenter->category_id    = $request->category_id;

        $DocumentCenter->subcategory_id = $request->subcategory_id;

        $DocumentCenter->document_name  = $request->document_name;

        $DocumentCenter->image          = $image ? $image : $imagenull;

        $DocumentCenter->pdf            = $pdf   ? $pdf : $pdfnull;

        $DocumentCenter->page           = $request->page;

        $DocumentCenter->price          = $request->price;

        $DocumentCenter->description    = $request->description;
        $DocumentCenter->meta_title     = $request->meta_title;
        $DocumentCenter->meta_keywords  = $request->meta_keywords;
        $DocumentCenter->meta_description = $request->meta_description;

        if($DocumentCenter->slug   != $request->slug)

        {

            $checkSlug        = DocumentCenter::where('slug', $request->slug)->first();

            $checkSlug ? $DocumentCenter->slug = SlugService::createSlug(DocumentCenter::class, 'slug', $request->slug) : $DocumentCenter->slug = $request->slug;

        }



        if ($DocumentCenter->save() ) {

            \LogActivity::addToLog('Document updated successfully.');

            // return back()->with('alert-success', "Document updated successfully!");

            return back()->with('alert-success', "Document updated successfully!");

        }



        return back()->with('alert-danger', "Unable to update document.");

        return redirect()->back();

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy(Request $request, DocumentCenter $DocumentCenter)

    {

        if ($DocumentCenter->delete()) {

            \LogActivity::addToLog('Document deleted successfully.');

            return back()->with('alert-success', "Document deleted successfully!");

            return redirect()->back();

        }



        return back()->with('alert-danger', "Unable to delete document.");

        return redirect()->back();

    }



    public function changeStatus(Request $request, $id)

    {

        $document    = DocumentCenter::where('id', $id)->first();

        if($document->status == '1'){

            $status = '0';

        }else{

            $status = '1';

        }

        $value     = array('status' => $status);

        DocumentCenter::where('id', $id)->update($value);

        \LogActivity::addToLog('Document Status Successfully Changed!');

        return back()->with('alert-success', "Status Successfully Changed!");

        return redirect()->back();

    }



    public function selectCategory(Request $request)

    {

        $records = Category::where('parent_id', $request->id)->get();

        return view('admin.document_center.category_list', compact('records'));

    }



    public function documentCategoryList($id)
    {

        $parent  = Category::where('id', base64_decode($id))->where('status', 1)->value('name');
        abort_if(!$parent, 403);
        $records = Category::where('parent_id', base64_decode($id))->where('status', 1)->get();

        return view('admin.document_center.subcategory_list', compact('records', 'id', 'parent'));

    }    



    // public function documentSubCategoryDocList(Request $request)

    // {

       

    //     $results = DocumentCenter::where('category_id', base64_decode($id))->where('status', 1)->paginate(2);

        

    //     return view('admin.document_center.doc-list', compact('results'));

    // }



    public function documentListSubcategory($cat_id, $subcat_id)

    {

        $catid    = base64_decode($cat_id);

        $subcatid = base64_decode($subcat_id);

        $category = Category::with('parent')->where('id', $subcatid)->where('status', 1)->first();

        $records  = DocumentCenter::query()->with('fevorite', function($q){$q->select('id', 'user_id', 'document_center_id', 'like');})->where('category_id', $catid)->where('subcategory_id', $subcatid)->where('status', 1)->get();
       

        return view('admin.document_center.document_list', compact('records', 'category'));
    }


    public function documentView($cat_id, $subcat_id, $doc_id)
    {

        $category  = Category::with('parent')->where('id', base64_decode($subcat_id))->where('status', 1)->first();

        $records   = DocumentCenter::where('category_id', base64_decode($cat_id))->where('subcategory_id', base64_decode($subcat_id))->where('status', 1)->get(); 
       
        $doc       = DocumentCenter::where('category_id', base64_decode($cat_id))->where('subcategory_id', base64_decode($subcat_id))->where('id', base64_decode($doc_id))->where('status', 1)->first();
        
        $doc['like'] = Favourite::where('document_center_id', $doc->id)->where('user_id', Auth::user()->id)->first();

        $checksubscription = SubscriptionUser::where('user_id', Auth::user()->id)->where('transaction_status', 1)->where('status', 1)->whereNull('deleted_at')->pluck('subscription_id');
        // dd($checksubscription->toArray());
       return view('admin.document_center.document_view', compact('doc', 'records', 'category', 'checksubscription'));

    }



    public function addFevorite(Request $request)
    {        

       $doc = Favourite::where('document_center_id', $request->doc_id)->where('user_id', Auth::user()->id)->first();

       if(!$doc)

       {

         $like = 1;

            

            $obj = new Favourite();

            $obj->user_id = Auth::user()->id;

            $obj->document_center_id = $request->doc_id;

            $obj->like = $like;

            $obj->save();



       }else{

            if($doc->like == 1){

                $like = 0;

            }else{

                $like = 1;

            }

            Favourite::where('document_center_id', $request->doc_id)->where('user_id', Auth::user()->id)->update([

                       'like' => $like,

            ]);

       }



       $msg = ($like == 1) ? 'Your Fevorite Document is Successfuly Added' :  'Your Fevorite Document is Successfuly Removed';

       return response()->json([

            'success' => $msg,

        ]);

       



    }



    public function fevorite()

    {

        if(Auth::user()->id == 1)

        {

            $records  = Favourite::query()->with('DocumentCenter', function($q){$q->select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'file_extension');})->select('id', 'document_center_id', 'user_id', 'like')->where('like', 1)->get();

        }else{



            $records  = Favourite::query()->with('DocumentCenter', function($q){$q->select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'file_extension');})->where('user_id', Auth::user()->id)->select('id', 'document_center_id', 'user_id', 'like')->where('like', 1)->get();

        }

        

        return view('admin.document_center.fevorite_list', compact('records'));

    }



    public function searchDocuments(Request $request)

    {

        $records = DocumentCenter::query()->with(['category'=>function($c){$c->select('id', 'parent_id', 'name', 'slug');}, 'subcategory'=>function($sc){$sc->select('id', 'parent_id', 'name', 'slug');}])->select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'file_extension')->where('document_name', 'LIKE' ,"%$request->document_name%")->where('status', 1)->get();

        return view('admin.document_center.search_documents', compact('records'));

    }



    public function getDocoments(Request $request)

    {

        

        $records = DocumentCenter::query()->with(['category'=>function($c){$c->select('id', 'parent_id', 'name', 'slug');}, 'subcategory'=>function($sc){$sc->select('id', 'parent_id', 'name', 'slug');}])->select('id', 'category_id', 'subcategory_id', 'slug', 'document_name', 'image', 'file_extension')->where('status', 1)->get();

        return view('admin.document_center.search_documents', compact('records'));

    }



}

