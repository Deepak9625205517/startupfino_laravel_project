<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\Admin\DocumentCenterController;
use App\Http\Controllers\Admin\LogingHistoryController;
use App\Http\Controllers\Admin\SubscriptionController;
use App\Http\Controllers\Admin\LogActivityController;
use App\Http\Controllers\Admin\CompanyLogoController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\TestmonialController;
use App\Http\Controllers\Front\SubscribeController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CustomerController;
use App\Http\Controllers\Front\FrontendController;
use App\Http\Controllers\Front\EnquiryController;
use App\Http\Controllers\Admin\SeoPageController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\StateController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CityController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\PayuMoneyController;
use App\Http\Controllers\HomeController;
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
  
// Route::get('/', function () {
//     return view('welcome');
// });
Route::fallback(function () {
    
    return redirect()->back();
 });
Route::post('admin-login', [LoginController::class, 'loginForm'])->name('loginForm');

Auth::routes();  
// Route::get('/home', [HomeController::class, 'index'])->name('home');
  
Route::group(['middleware' => ['auth']], function() {

    /* Log Activity */ 
    Route::get('logActivity', [LogActivityController::class, 'logActivity'])->name('logActivity.index');

    /* Login History */
    Route::get('login-history', [LogingHistoryController::class, 'index'])->name('loginhistory.index');
    
    Route::get('dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('get-filter', [AdminController::class, 'getFilter'])->name('getFilter');
    Route::get('document-list', [AdminController::class, 'getDocument'])->name('getDocument');

    /* Setting */
    Route::get('setting', [AdminController::class, 'setting'])->name('setting.index');
    Route::post("setting", [AdminController::class, 'settingPost'])->name('setting.settingPost');

    /* Payment Gateway /payu-money-payment/*/
    // Route::get('payu-money-payment', [PayuMoneyController::class, 'payuMoneyPayment'])->name('payu-money-payment');
    // Route::get('payment-success', [PayuMoneyController::class, 'paymentSuccess'])->name('payumoney-success'); 
    // Route::post('payment-cancel', [PayuMoneyController::class, 'paymentCancel'])->name('payumoney-cancel'); 

    Route::resources([
        'pages'             => PageController::class,
        'seo-pages'         => SeoPageController::class,
        'roles'             => RoleController::class,
        'permissions'       => PermissionController::class,
        'users'             => UserController::class,
        'customers'         => CustomerController::class,
        'products'          => ProductController::class,
        'categories'        => CategoryController::class,
        'document-centers'  => DocumentCenterController::class,
        'company-logos'     => CompanyLogoController::class,
        'testmonials'       => TestmonialController::class,
        'subscriptions'     => SubscriptionController::class,
        'states'             => StateController::class,
        'cities'             => CityController::class,
    ]);
    
    /* Subscription */
    Route::get('subscriptions/status/{id}', [SubscriptionController::class, 'changeStatus'])->name('subscriptions.status');
    Route::get('subscriptions/details', [SubscriptionController::class, 'show'])->name('subscriptions.show');
    Route::get('subscriptions-user/status/{id}', [SubscriptionController::class, 'userStatus'])->name('subscriptions.user.status');

     /* company logo */
     Route::get('testmonials/status/{id}', [TestmonialController::class, 'changeStatus'])->name('testmonials.status');

    /* company logo */
    Route::get('company-logos/status/{id}', [CompanyLogoController::class, 'changeStatus'])->name('company-logos.status');

    /* Static Pages*/
    Route::get('pages/status/{id}', [PageController::class, 'changeStatus'])->name('pages.status');
    
    /* User */
    Route::get('users/status/{id}', [UserController::class, 'changeStatus'])->name('users.status');
    Route::get('customers/status/{id}', [UserController::class, 'changeStatus'])->name('customers.status');

    /* Category */
    Route::get('categories/status/{id}', [CategoryController::class, 'changeStatus'])->name('categories.status');
    Route::get('categories/subcategory/{id}', [CategoryController::class, 'subCategoryList'])->name('subCategoryList.index');

    /* Document Center */
    Route::get('document-centers/status/{id}', [DocumentCenterController::class, 'changeStatus'])->name('document-centers.status');
    Route::get('document-centers/subcategory/{id}', [DocumentCenterController::class, 'documentCategoryList'])->name('documentCategoryList.index');
    // Route::get('document-centers/subcategory/doc-list', [DocumentCenterController::class, 'documentSubCategoryDocList'])->name('documentCategoryList.doc.list');

    Route::get('document-centers/subcategory/{catid?}/{subcatid?}', [DocumentCenterController::class, 'documentListSubcategory'])->name('documentListSubcategory.index');
    Route::get('document-centers/subcategory/{catid}/{subcatid}/{doc_id}', [DocumentCenterController::class, 'documentView'])->name('document.view');
    Route::get('select-category', [DocumentCenterController::class, 'selectCategory']);

    Route::get('documents', [DocumentCenterController::class, 'getDocoments']);
    Route::get('document-data', [DocumentCenterController::class, 'searchDocuments']);

    /* Fevorites */ 
    Route::post('add-fevorite', [DocumentCenterController::class, 'addFevorite'])->name('add.fevorite');
    Route::get('fevorites', [DocumentCenterController::class, 'fevorite'])->name('fevorites');


    /* Contact Us List */
    Route::get('contact', [ContactUsController::class, 'index'])->name('contact.index');
    Route::get('enquiry', [EnquiryController::class, 'index'])->name('enquiry.index');
    
});

/* Send Mail */ 
Route::get('email-test', function(){
  
    $details['email'] = 'ravinsan15@gmail.com';
  
    dispatch(new \App\Jobs\SendEmailJob());
  
    return view('welcome');
});

// /* Front Routes */ 

// Route::fallback(function () { return redirect('/404');});
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('templates', [FrontendController::class, 'templates'])->name('templates');
Route::get('templates/{sub_cat_slug?}', [FrontendController::class, 'documentsList'])->name('templates.subcategory');
Route::get('templates/{cat_slug?}/{sub_cat_slug?}/{docu_slug?}', [FrontendController::class, 'documentsDetail'])->name('templates.document_details');

Route::get('about-us', [FrontendController::class, 'aboutUs'])->name('about-us');
Route::get('blog', [FrontendController::class, 'blog'])->name('blog');
Route::get('blog-detail', [FrontendController::class, 'blogdetail'])->name('blog-detail');
Route::get('change-password', [FrontendController::class, 'changePassword'])->name('change-password');
Route::get('otp', [FrontendController::class, 'otp'])->name('otp');

/* Contat Us */ 
Route::get('contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');
Route::post('contactus', [FrontendController::class, 'saveContactUs'])->name('contactus');

/* Forget Password */ 
Route::get('forgot-password', [FrontendController::class, 'forgotPassword'])->name('forgot-password');
Route::post('forgot-password', [SubscribeController::class, 'forgotPassword'])->name('forgotpassword');
Route::get('forgot-password/{email?}', [SubscribeController::class, 'resetPasswords'])->name('resetPassword');
Route::post('change-password', [SubscribeController::class, 'changePassword'])->name('changePassword');

/* User Registration */
Route::get('signup', [RegisterController::class, 'signup'])->name('signup');
Route::post('register', [RegisterController::class, 'register'])->name('register');

/*User Login*/ 
Route::get('customer/login', [FrontendController::class, 'login'])->name('customerLogin');
Route::post('customer-login', [LoginController::class, 'customerLogin'])->name('customer');

/* Subscribe Email*/
Route::post('subscribe', [SubscribeController::class, 'subscribe'])->name('subscribe');

/* Enquiry */
Route::post('enquiry', [EnquiryController::class, 'enquiry'])->name('enquiry');

/* Subscription Plan list */
Route::get('subscription', [FrontendController::class, 'subscription'])->name('subscription');

/* Search Documents */
Route::post('search_document', [FrontendController::class, 'search_document'])->name('search.document');
Route::get('filter-documents', [FrontendController::class, 'filterDocuments'])->name('filter.documents');

Route::get('pay-now/{subscription_id?}', [FrontendController::class, 'payNow'])->name('pay-now');
Route::get('payment', [SubscribeController::class, 'payment'])->name('payment');
Route::get('payment-failed', [SubscribeController::class, 'paymentFailed'])->name('payment.failed');
Route::get('payment-success', [SubscribeController::class, 'paymentSuccess'])->name('payment.success');

Route::get('privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('terms-of-service', [FrontendController::class, 'termsService'])->name('terms-of-service');
Route::get('cookies-policy', [FrontendController::class, 'cookiesPolicy'])->name('cookies-policy');
Route::get('profile', [FrontendController::class, 'profile'])->name('profile');
Route::get('sales-and-marekting', [FrontendController::class, 'salesAndMarekting'])->name('sales-and-marekting');

Route::post('api/fetch-cities', [FrontendController::class, 'fetchCity'])->name('state.city');

Route::get('thankyou', [FrontendController::class, 'thankyou'])->name('thankyou');
