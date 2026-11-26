<?php

use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\CampaignController;
use App\Http\Controllers\Admin\CommentController as AdminCommentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DonarController;
use App\Http\Controllers\Admin\DonationController;
use App\Http\Controllers\Admin\DonationReceiviedController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\MailSettingController;
use App\Http\Controllers\Admin\PaymentSettingController;
use App\Http\Controllers\Admin\RoleConditionController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\Web\AdvisoryController;
use App\Http\Controllers\Admin\Web\AnnualController;
use App\Http\Controllers\Admin\Web\BlogController;
use App\Http\Controllers\Admin\Web\CoreTeamMemberController;
use App\Http\Controllers\Admin\Web\FeatureController;
use App\Http\Controllers\Admin\Web\SocialSettingController;
use App\Http\Controllers\Admin\Web\TopbarSettingController;
use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\ContactController;
use App\Http\Controllers\Frontend\GalleryController;
use App\Http\Controllers\Admin\Web\GalleryController as AdminGalleryController;
use App\Http\Controllers\Admin\Web\FounderStoryController as AdminFounderStoryController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\JoinUsController;
use App\Http\Controllers\Frontend\OurProjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\Web\VolunteerController;
use App\Http\Controllers\Admin\Web\FocusController;
use App\Http\Controllers\Admin\Web\ImageSectionConditionController;
use App\Http\Controllers\Admin\Web\ImageSectionController;
use App\Http\Controllers\Admin\Web\NewsController;
use App\Http\Controllers\Admin\Web\ProjectController;
use App\Http\Controllers\Admin\Web\TestimonialController;
use App\Http\Controllers\Donor\Auth\ForgotPasswordController;
use App\Http\Controllers\Donor\Auth\LoginController;
use App\Http\Controllers\Donor\Auth\RegisterController;
use App\Http\Controllers\Donor\Auth\ResetPasswordController;
use App\Http\Controllers\Donor\DonorDashboardController;
use App\Http\Controllers\Donor\DonationController as DonorDonationController;
use App\Http\Controllers\Donor\DonorProfileController;
use App\Http\Controllers\Frontend\BlogController as FrontendBlogController;
use App\Http\Controllers\Frontend\CommentController;
use App\Http\Controllers\Frontend\DonationController as FrontendDonationController;
use App\Http\Controllers\Frontend\FounderStoryController as FrontendFounderStoryController;

use Illuminate\Support\Facades\Route;


// Route::get('/dum', function () {
//     return view('welcome')->name('dum');
// });

Route::get(
    '/',
    [HomeController::class, 'index']
)->name('home');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth:web')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';





// <!-- donation route-->
Route::get('donate', [HomeController::class, 'donatePage'])->name('donation-page');
Route::get('plantation/page/{slug}', [HomeController::class, 'plantationPage'])->name('plantation-page');
Route::get('rudra/page/{slug}', [HomeController::class, 'rudraPage'])->name('rudra-page');
Route::get('shambhoo/page/{slug}', [HomeController::class, 'shambhooPage'])->name('shambhoo-page');
Route::get('govind/page/{slug}', [HomeController::class, 'govindPage'])->name('govind-page');

Route::get('events/page', [HomeController::class, 'event'])->name('event-page');

Route::get('thanku/page', [HomeController::class, 'thankuPage'])->name('thanku-page');
Route::get('payment/page/{id}', [HomeController::class, 'paymentPage'])->name('payment-page');

// About page route

Route::get('/about/organization', [AboutController::class, 'aboutOrganization'])->name('about-organization');
Route::get('/about/pyare-lal', [AboutController::class, 'aboutPyareLal'])->name('about-pyare-lal');
Route::get('/about/president', [AboutController::class, 'aboutPresident'])->name('about-president');
Route::get('/founder-stories', [FrontendFounderStoryController::class, 'index'])->name('founder-stories.index');
Route::get('/founder-stories/{slug}', [FrontendFounderStoryController::class, 'show'])->name('founder-stories.show');


//Policy Routes

Route::get('/privacy-policy', [OurProjectController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/term-and-conditions', [OurProjectController::class, 'termCondition'])->name('term-condition');
Route::get('/shipping-policy', [OurProjectController::class, 'shippingPolicy'])->name('shipping-policy');
Route::get('/cancellations-and-refunds', [OurProjectController::class, 'cancellationsRefunds'])->name('cancellations-refunds');


//Our Projects Routes
Route::get('/projects', [OurProjectController::class, 'ourProject'])->name('our-project');
Route::get('/project/pathology-lab', [OurProjectController::class, 'pathologyLab'])->name('our-project.pathology-lab');
Route::get('/project/wellness-centres-for-females', [OurProjectController::class, 'wellnessCentresForFemales'])->name('our-project.wellness-centres-for-females');
Route::get('/project-description', [OurProjectController::class, 'ourProjectDescription'])->name('our-project-description');
Route::get('/project/skill-development', [OurProjectController::class, 'skillDevelopment'])->name('our-project.skill-development');
Route::get('/project/female-health-hygiene', [OurProjectController::class, 'femaleHealthHygiene'])->name('our-project.female-health-hygiene');
Route::get('/project/avadhoot-bal-seva', [OurProjectController::class, 'avadhootBalSeva'])->name('our-project.avadhoot-bal-seva');

Route::get('/project/health-awareness', [OurProjectController::class, 'healthAwareness'])->name('our-project.health-awareness');
Route::get('/project/happiness-wellness', [OurProjectController::class, 'happinessWellness'])->name('our-project.happiness-wellness');
Route::get('/project/women-employment', [OurProjectController::class, 'womenEmployment'])->name('our-project.women-employment');
Route::get('/project/pradhan-mantri-jan-aushadhi-kendra', [OurProjectController::class, 'pradhanMantri'])->name('our-project.pradhan-mantri-jan-aushadhi-kendra');
Route::get('/project/journal', [OurProjectController::class, 'journal'])->name('our-project.journal');
Route::get('/project/female-health', [OurProjectController::class, 'femaleHealth'])->name('our-project.female-health');

Route::get('/project/female-health-campaign', [OurProjectController::class, 'femaleHealthCampaign'])->name('our-project.female-health-campaign');
Route::get('/project/lok-nyay-seva-kendra', [OurProjectController::class, 'lokNyaySevaKendra'])->name('our-project.lok-nyay-seva-kendra');
Route::get('/project/project-bhairavi', [OurProjectController::class, 'projectBhairavi'])->name('our-project.project-bhairavi');

//Join us Routes
Route::get('/join/annual-member', [JoinUsController::class, 'annualMember'])->name('annual-member');

Route::post('/data-store/annual-member', [JoinUsController::class, 'storeAnnualMember'])->name('store.annual-member');
Route::get('/join/volunteer-member', [JoinUsController::class, 'volunteerMember'])->name('volunteer-member');
Route::post('/data-store/volunteer-member', [JoinUsController::class, 'storeVolunteerMember'])->name('store.volunteer-member');
Route::get('/join/annual-report', [JoinUsController::class, 'annualReport'])->name('annual-report');

Route::get('/volunteer-member/success/{id}', [JoinUsController::class, 'volunteerMemberSuccess'])->name('volunteer-member.success');
Route::get('/annual-member/success/{id}', [JoinUsController::class, 'annualMemberSuccess'])->name('annual-member.success');
//Contact Routes

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/dashboard', [ContactController::class, 'dashboard'])->name('contact.dashboard');
//Gallery Route
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery-page');

Route::post('/upload-image', [AboutController::class, 'UploadImage'])->name('upload-image');

Route::get('/mark-notification-as-read/{notification}', [DonationReceiviedController::class, 'MarkAsRead'])->name('markread');

//blog Route
Route::get('blogs', [FrontendBlogController::class, 'blog'])->name('blog');
Route::get('blogs/{id}/{slug}', [FrontendBlogController::class, 'blogDetails'])->name('blog.details');
Route::get('/filter/blog', [FrontendBlogController::class, 'filterBlog'])->name('filter.blog');



Route::name('web.')->prefix('web')->group(
    function () {

        //Donation Routes
        Route::post('/donation/store', [FrontendDonationController::class, 'store'])->name('donation.store');
        Route::post('/razorpay/create-order', [FrontendDonationController::class, 'createOrder'])
            ->name('razorpay.createOrder');
        Route::get('/payment/success/{id}', [FrontendDonationController::class, 'success'])->name('payment.success');
        Route::post('/leave/comment', [CommentController::class, 'comment'])->name('leave.comment');
    }
);

// Direct visitors opening /admin to the staff login; authenticated dashboard routes remain unchanged.
Route::get('/admin', function () {
    return redirect()->route('login');
});

//Admins routes


Route::name('admin.')->prefix('admin')->group(
    function () {
        Route::get('/donation/payment/{id}', [DonationController::class, 'payment'])->name('donation.payment');
        Route::get('/payment/razorpay/{id}', [DonationController::class, 'paymentRazorpay'])->name('payment.razorpay');
        Route::get('/payment/success/{id}', [DonationController::class, 'success'])->name('payment.success');
    }
);







Route::name('admin.')->middleware(['auth:web'])->prefix('admin')->group(function () {
    //donation routes

    Route::post('/payment/offline', [DonationController::class, 'adminDonation'])->name('payment.offline');

    Route::post('/filter-by-month', [DashboardController::class, 'filterByMonth'])->name('filter-by-month');

    Route::get('/donor/print/donation/{id}', [DonarController::class, 'printDonation'])->name('print.donation');

    Route::get('/donar/list', [DonarController::class, 'donarList'])->name('donar.list');
    Route::get('/donar/view/{id}', [DonarController::class, 'show'])->name('donar.show');
    Route::get('/donor/profile/{id}', [DonarController::class, 'editProfile'])->name('donor.editProfile');
    Route::put('/donor/profile/update/{id}', [DonarController::class, 'updateProfile'])->name('donor.updateProfile');

    Route::get('/donor/print/password/{id}', [DonarController::class, 'printPassword'])->name('donar.print.password');

    Route::get('/donor/show/password/{id}', [DonarController::class, 'showPassword'])->name('donar.show.password');
    Route::get('/donor/send/password/{id}', [DonarController::class, 'sendPassword'])->name('donar.send.password');

    Route::delete('/donor/destroy/{id}', [DonarController::class, 'destroy'])->name('donar.destroy');

    //User Routes
    Route::post('/user/send/password/{id}', [UserController::class, 'sendPassword'])->name('user.send.password');

    //Mail Setting Routes
    Route::get('/mail-settings/index', [MailSettingController::class, 'index'])->name('mail-settings.index');

    Route::post('/mail-settings/store', [MailSettingController::class, 'store'])->name('mail-settings.store');

    //Razorpay Setting
    Route::get('/razorpay-setting/index', [PaymentSettingController::class, 'index'])->name('razorpay-setting.index');
    Route::post('/razorpay-setting/store', [PaymentSettingController::class, 'store'])->name('razorpay-setting.store');

    //Setting Routes
    Route::get('/settings/index', [SettingController::class, 'index'])->name('settings.index');
    Route::post('/settings/store', [SettingController::class, 'siteInfo'])->name('settings.siteinfo');
    //Topbar Setting Routes
    Route::get('/topbar-settings/index', [TopbarSettingController::class, 'index'])->name('topbar-settings.index');
    Route::post('/topbar-settings/store', [TopbarSettingController::class, 'store'])->name('topbar-settings.store');
    //Social Setting Routes
    Route::get('/social-settings/index', [SocialSettingController::class, 'index'])->name('social-settings.index');
    Route::post('/social-settings/store', [SocialSettingController::class, 'store'])->name('social-settings.store');


    //Route Image Section Condition
    Route::get('/condition-image-apply/index', [ImageSectionConditionController::class, 'index'])->name('condition-image-apply.index');
    Route::post('/condition-image-apply/store', [ImageSectionConditionController::class, 'store'])->name('condition-image-apply.store');

    Route::post('/upload-image', [AdminGalleryController::class, 'UploadImage'])->name('upload-image');




    //Event routes
    Route::get('event/list', [EventController::class, 'eventList'])->name('event.list');

    //Role Condition routes
    Route::get('/staff-conditions/index', [RoleConditionController::class, 'index'])->name('staff-condition.index');
    Route::post('/staff-conditions/store', [RoleConditionController::class, 'store'])->name('staff-condition.store');

    Route::resource('founder-stories', AdminFounderStoryController::class);

});






Route::name('admin.')->middleware(['auth:web'])->prefix('admin')->group(
    function () {
        //Admin routes

        //Dashboard Routes

        Route::resource('dashboard', DashboardController::class);

        //Donation Routes
        Route::resource('donation', DonationController::class);
        //Campaign Routes
        Route::resource('campaign', CampaignController::class);

        //Focused Routes
        Route::resource('focus', FocusController::class);

        //Feature Routes
        Route::resource('feature', FeatureController::class);

        //Blog Category Routes
        Route::resource('category', BlogCategoryController::class);

        //Blog Routes
        Route::resource('blog', BlogController::class);

        //Blog Comment
        Route::resource('comment', AdminCommentController::class);

        //Advisory Routes
        Route::resource('advisory', AdvisoryController::class);
        //News Route
        Route::resource('news', NewsController::class);

        //Core Team Member
        Route::resource('core-team', CoreTeamMemberController::class);

        //Role Controller

        Route::resource('role', RoleController::class);


        //Testimonials Route
        Route::resource('testimonial', TestimonialController::class);
        //User Routes
        Route::resource('user', UserController::class);
        //Project Route
        Route::resource('project', ProjectController::class);

        //Image Section Routes
        Route::resource('image-section', ImageSectionController::class);

        //Gallery Routes
        Route::resource('gallery', AdminGalleryController::class);
        //Volunteer Routes
        Route::resource('volunteer', VolunteerController::class);
        //Event Routes
        Route::resource('event', EventController::class);
        //Annual Routes
        Route::resource('annual', AnnualController::class);
    }
);


//Donor routes
// Route::name('donor.')->middleware(['auth', 'is_role:donor'])->prefix('donor')->group(function () {
//     //donation routes

//     Route::get('/donor/print/donation/{id}', [DonorDonationController::class, 'printDonation'])->name('print.donation');

//     Route::get('/donor/profile/{id}', [DonorProfileController::class, 'editProfile'])->name('edit.profile');
//     Route::put('/donor/profile/update/{id}', [DonorProfileController::class, 'updateProfile'])->name('update.profile');
// });




// Route::name('donor.')->middleware(['auth', 'is_role:donor'])->prefix('donor')->group(
//     function () {
//         //Donor routes

//          //Donor Dashboard Routes
//         Route::resource('dashboard', DonorDashboardController::class);
//         //Donation Dashboard Routes
//         Route::resource('donation', DonorDonationController::class);
//     }
// );

Route::middleware(['guest:donor'])->prefix('donor')->name('donor.')->group(function () {

    // Login Routes
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
});


Route::prefix('donor')->name('donor.')->group(function () {



    // Login Routes
    // Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    // Route::get('/login','LoginController@showLoginForm')->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('login.store');
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Register Routes
    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register');
    Route::post('/register', [RegisterController::class, 'register'])->name('register.store');

    // Forgot Password Routes
    Route::get('/password/reset', [ForgotPasswordController::class, 'showLinkRequestForm'])->name('password.request');
    Route::post('/password/email', [ForgotPasswordController::class, 'sendResetLinkEmail'])->name('password.email');

    // Reset Password Routes
    Route::get('/password/reset/{token}/{email}', [ResetPasswordController::class, 'showResetForm'])->name('password.reset');
    Route::post('/password/reset', [ResetPasswordController::class, 'reset'])->name('password.update');
});


// Student Dashboard Routes
Route::middleware(['auth:donor'])->prefix('donor')->name('donor.')->group(function () {
    //Donor Dashboard Routes
    Route::resource('dashboard', DonorDashboardController::class);
    //Donation Dashboard Routes
    Route::resource('donation', DonorDonationController::class);

    //donation routes

    Route::get('/donor/print/donation/{id}', [DonorDonationController::class, 'printDonation'])->name('print.donation');

    Route::get('/donor/profile/{id}', [DonorProfileController::class, 'editProfile'])->name('edit.profile');
    Route::put('/donor/profile/update/{id}', [DonorProfileController::class, 'updateProfile'])->name('update.profile');
});
