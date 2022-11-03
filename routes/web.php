<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['prefix' => 't7x4jwvkt6nhkv8fzyrm97fqrhdn5nx2m5m2', 'as' => 'payment.'], function () {
    Route::get('/cardinity-back', function () {
        return redirect('/personal/');
    });
    Route::post('/cardinity-back', 'TariffController@payCardResult');
});

Route::group(['prefix' => '7ja983e2r5cc46e83jpbcds5psw39dkzh6fc', 'as' => 'apiposter.'], function () {
    Route::post('/update-charts', 'ApiPosterController@updateCharts');
    Route::post('/get-ads-for-update-all', 'ApiPosterController@getAdsForUpdateAll');
    Route::post('/get-ads-for-update', 'ApiPosterController@getAdsForUpdate');
    Route::post('/get-ads-for-remove', 'ApiPosterController@getAdsForRemove');
    Route::post('/get-ads-for-autoraising', 'ApiPosterController@getAdsForAutoRaising');
});

Route::view('/', 'landing.index')->name('landing');
Route::view('/en', 'landing.index_en')->name('landing-en');
Route::view('/clubs', 'landing.clubs')->name('clubs');
Route::view('/clubs/en', 'landing.clubs_en')->name('clubs-en');

Route::view('/tariffs', 'public.tariffs')->name('tariffs');

Route::get('/send-mail', function () {

    /*$email = 'ins-a050dhgc@isnotspam.com';
    $subject = "Register form data";
    // Unique boundary
    $boundary = md5( uniqid() . microtime() );
    $message = view('welcome')->render();

    // If no $headers sent
    if (empty($headers))
    {
        // Add From: header
        $headers = "From: AlmejaRosa.es <no-replay@almejarosa.es>\r\n";

        // Specify MIME version 1.0
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "List-Unsubscribe: https://almejarosa.es/unsubscribe/7263517263517\r\n";
        // Tell e-mail client this e-mail contains alternate versions
        $headers .= "Content-Type: multipart/alternative; boundary=\"$boundary\"\r\n\r\n";

    }

    // Plain text version of message
    $body = "--$boundary\r\n" .
       "Content-Type: text/plain; charset=UTF-8\r\n" .
       "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split( base64_encode( strip_tags($message) ) );

    // HTML version of message
    $body .= "--$boundary\r\n" .
       "Content-Type: text/html; charset=UTF-8\r\n" .
       "Content-Transfer-Encoding: base64\r\n\r\n";
    $body .= chunk_split( base64_encode( $message ) );

    $body .= "--$boundary--";

    mail($email, $subject, $body, $headers);*/
    Mail::send(['welcome', 'welcome_txt'], [], function ($message) {
        // $message->to('4fQHBg4AwCTlGu@dkimvalidator.com')->subject('Register form data');
        // dkimvalidator.com | mail-tester.com | isnotspam.com
        // $message->to('almejarosa.es@gmail.com')->subject('Register form data');
        $message->to('test.services.ua@gmail.com')->subject('Register form data');
        //$message->to('almejarosa.es@yandex.ru')->subject('Register form data');


        $headers = $message->getHeaders();
        $headers->addTextHeader('List-Unsubscribe', 'https://almejarosa.es/unsubscribe/7263517263517');

    });
});

/*
mail header  List-Unsubscribe
*/

Route::get('/send-sms', function () {
    // Account details
    /*$apiKey = urlencode('A9pdTNutjjw-h6B8PDfaQQS35OpoI2UVzOfRnJ3hkW');

    // Message details
    $numbers = array();
    $sender = urlencode('AlmejaRosa');
    $message = rawurlencode('El codigó:' . rand(100000, 900000));

    $numbers = implode(',', $numbers);

    // Prepare data for POST request
    $data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);

    // Send the POST request with cURL
    $ch = curl_init('https://api.txtlocal.com/send/');
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    // Process your response here
    echo $response;*/
});

Route::get('/test', 'MainController@test');
Route::get('/page/policy', 'MainController@policy');
Route::get('/video-faq', 'MainController@videoFaq');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/policy', 'EmailController@policy');
    Route::view('blocked', 'pages.blocked')->name('blocked');
});

Route::get('/pay-card-success', function () {
    return redirect('/');
});
Route::post('/pay-card-success', 'TariffController@payCardSuccess');

Route::get('/contact', 'ContactController@index');
Route::post('/contact/store', 'ContactController@store');

Route::get('/posts/pay-success', 'PostController@indexWithSuccess');
Route::get('/posts/pay-failure', 'PostController@indexWithFailure');

Route::group(['middleware' => ['auth', 'blocked']], function () {

    Route::post('/email/sendpolicy', 'EmailController@sendpolicy');
    Route::post('/email/masanuncios', 'EmailController@masanuncios');

    Route::group(['middleware' => 'policy'], function () {
        Route::get('/personal', 'MainController@index');
        Route::get('/post/create', 'PostController@create');

        Route::get('/post/edit{id}', 'PostController@edit');

        Route::post('/phone/create', 'PostController@phonecreate');
        Route::post('/phone/check', 'PostController@checkphone');
        // Route::post('/post/store', 'PostController@store');
        Route::post('/post/store-step1', 'PostController@storeStep1');
        Route::post('/post/store-step2', 'PostController@storeStep2');
        Route::post('/post/store-step3', 'PostController@storeStep3');
        Route::post('/post/store-step4', 'PostController@storeStep4');

        Route::get('/posts', 'PostController@index');
        Route::get('/posts', 'PostController@index');
        Route::get('/getposts', 'PostController@getposts');
        Route::post('/getpost', 'PostController@getpost');
        Route::post('/post/delete{id}', 'PostController@delete');
        Route::post('/post/restore{id}', 'PostController@restore');
        Route::post('/post/destroy{id}', 'PostController@destroy');

        Route::post('/post/active{id}', 'PostController@active');
        Route::post('/post/autopay{id}', 'PostController@autopay');

        Route::post('/avatar/store{id}/{order}', 'AvatarController@store');
        Route::post('/avatar/destroy{id}', 'AvatarController@destroy');
        Route::post('/avatar/active', 'AvatarController@setactive');

        Route::post('/attachments/store', 'AttachmentController@store');
        Route::post('/attachment/set-cover', 'AttachmentController@set_cover');
        Route::get('/attachments/{post_id}', 'AttachmentController@get_attachments');
        Route::delete('/attachments/{id}', 'AttachmentController@delete');

        Route::post('/video/store{id}', 'VideoController@store');
        Route::delete('/video/destroy{id}', 'VideoController@destroy');
        Route::post('/video/active', 'VideoController@setactive');

        Route::get('/getimages{id}', 'AvatarController@getimages');
        Route::get('/getvideos{id}', 'VideoController@getvideos');


        Route::post('/tariff/pay', 'TariffController@pay');
        Route::post('/tariff/pay-card', 'TariffController@payCard');
        Route::post('/tariff/pay/coor', 'TariffController@payCoor');
        Route::post('/tariff/pay/coor-card', 'TariffController@payCoorCard');
        Route::get('/pay/manual/{id}', 'TariffController@payManual');
        Route::post('/api/pay/manual', 'TariffController@payApiManual');

        Route::get('/tariff/page', 'MainController@posttariff');
        Route::get('/tariff{id}', 'MainController@posttariff');
        Route::get('/tariff/{id}/{plan}', 'TariffController@tariffDetail');
        Route::get('/tariff-list', 'MainController@posttariff');

        // Порталы

        Route::get('/portals', 'StatisticController@portals');
        Route::get('/getportals', 'StatisticController@getportals');

        Route::get('/dashboard', 'StatisticController@dashboard');
        Route::get('/dashboard/getdatas', 'StatisticController@dashboardgetads');


        Route::get('/getforums', 'StatisticController@getforums');
        Route::get('/forums', 'StatisticController@forumsall');

        // Страница для портала
        Route::get('/statistic/portals{id}', 'StatisticController@postportals');
        Route::get('/statistic/forums/', 'StatisticController@forums');
        Route::get('/statistic/forums/{site}/{postid}', 'StatisticController@loadForums');


        Route::get('/pay/success', 'TariffController@success')->name('confirm-payment');
        Route::get('/pay/error', 'MainController@error')->name('error-payment');;

        Route::get('/consumption', 'MainController@consumption');

        Route::get('/billing', 'BillingController@index');
        Route::post('/billing/store', 'BillingController@store');

        Route::post('/user/change-email', 'EmailController@changeEmail');
    });

});


Route::post('/email/store', 'EmailController@store');
Route::get('/user/verify/{token}', 'EmailController@verifyUser');
Route::post('/email/register', 'EmailController@register');


Route::post('/email/forgot', 'EmailController@forgot');

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
]);

Route::get('/logout', function () {
    auth()->logout();
    return redirect()->back();
});


// в ads добавить inuxtimecheck и status
// время  удаления перенести в тарифы
