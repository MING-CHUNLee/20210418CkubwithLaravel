<?php

use App\Http\Controllers\ClubinfoController;
use App\Http\Controllers\ClubofplanController;
use App\Http\Controllers\ClubofclassrecordController;
use App\Http\Controllers\FinancialtableController;
use App\Http\Controllers\CluboffeedbackController;
use App\Http\Controllers\ClubactivityapplyController;
use App\Http\Controllers\ClubactivityresultsController;
use App\Http\Controllers\ClubofnewsController;
use App\Http\Controllers\ActivitypicController;
use App\Http\Controllers\ClassrecordpicController;
use App\Http\Controllers\FeedbacktypeController;
use App\Http\Controllers\NewstypeController;
use App\Http\Controllers\SemesterController;
use App\Http\Controllers\ClubsemesterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/clubs',[ClubinfoController::class,'index']);
Route::get('/clubs/{id}', [ClubinfoController::class,'show']);
Route::post('/clubs',[ClubinfoController::class,'store']);
Route::put('/clubs/{id}',[ClubinfoController::class,'update']);
Route::delete('/clubs/{id}',[ClubinfoController::class,'destroy']);

// Route::get('/clubOfplan',[ClubofplanController::class,'index']);
Route::get('/clubOfplan/{id}',[ClubofplanController::class,'show']);
Route::post('/clubOfplan',[ClubofplanController::class,'store']);
Route::put('/clubOfplan/{id}',[ClubofplanController::class,'update']);
Route::delete('/clubOfplan/{id}',[ClubofplanController::class,'destroy']);


Route::get('/clubOfclassrecord',[ClubofclassrecordController::class,'index']);
Route::get('/clubOfclassrecord/{id}',[ClubofclassrecordController::class,'showALL']);
Route::get('/clubOfclassrecord/{id}/{date}',[ClubofclassrecordController::class,'show']);
Route::post('/clubOfclassrecord',[ClubofclassrecordController::class,'store']);
Route::put('/clubOfclassrecord/{id}',[ClubofclassrecordController::class,'update']);
Route::delete('/clubOfclassrecord/{id}',[ClubofclassrecordController::class,'destroy']);

Route::get('/financialtable/{id}',[FinancialtableController::class,'show']);
Route::post('/financialtable',[FinancialtableController::class,'store']);
Route::put('/financialtable/{id}',[FinancialtableController::class,'update']);
Route::delete('/financialtable/{id}',[FinancialtableController::class,'destroy']);

Route::get('/clubOfFeedback',[CluboffeedbackController::class,'index']);
Route::get('/clubOfFeedback/{id}',[CluboffeedbackController::class,'show']);
Route::post('/clubOfFeedback',[CluboffeedbackController::class,'store']);
Route::put('/clubOfFeedback/{id}',[CluboffeedbackController::class,'update']);
Route::delete('/clubOfFeedback/{id}',[CluboffeedbackController::class,'destroy']);

Route::get('/activityapply',[ClubactivityapplyController::class,'index']);
Route::get('/activityapply/{id}',[ClubactivityapplyController::class,'show']);
Route::post('/activityapply',[ClubactivityapplyController::class,'store']);
Route::put('/activityapply/{id}',[ClubactivityapplyController::class,'update']);
Route::delete('/activityapply/{id}',[ClubactivityapplyController::class,'destroy']);

Route::get('/activityresults',[ClubactivityresultsController::class,'index']);
Route::get('/activityresults/{id}',[ClubactivityresultsController::class,'showALL']);
Route::get('/activityresults/{id}/{date}',[ClubactivityresultsController::class,'show']);
Route::post('/activityresults',[ClubactivityresultsController::class,'store']);
Route::put('/activityresults/{id}',[ClubactivityresultsController::class,'update']);
Route::delete('/activityresults/{id}',[ClubactivityresultsController::class,'destroy']);

// 最新消息
Route::get('/clubOfnews',[ClubofnewsController::class,'index']);
Route::get('/clubOfnews/{id}',[ClubofnewsController::class,'showALL']);
Route::get('/clubOfnews/{id}/{date}',[ClubofnewsController::class,'show']);
Route::post('/clubOfnews',[ClubofnewsController::class,'store']);
Route::put('/clubOfnews/{id}',[ClubofnewsController::class,'update']);
Route::delete('/clubOfnews/{id}',[ClubofnewsController::class,'destroy']);

// 活動成果照
Route::get('/activitypic/{id}/{date}',[ActivitypicController::class,'show']);
Route::post('/activitypic',[ActivitypicController::class,'store']);
Route::put('/activitypic/{id}',[ActivitypicController::class,'update']);
Route::delete('/activitypic/{id}',[ActivitypicController::class,'destroy']);

// 社課照片
Route::get('/classrecordpic/{id}/{date}',[ClassrecordpicController::class,'show']);
Route::post('/classrecordpic',[ClassrecordpicController::class,'store']);
Route::put('/classrecordpic/{id}',[ClassrecordpicController::class,'update']);
Route::delete('/classrecordpic/{id}',[ClassrecordpicController::class,'destroy']);

// 反饋類型
Route::get('/feedbacktype',[FeedbacktypeController::class,'index']);
Route::post('/feedbacktype',[FeedbacktypeController::class,'store']);
Route::put('/feedbacktype/{id}',[FeedbacktypeController::class,'update']);
Route::delete('/feedbacktype/{id}',[FeedbacktypeController::class,'destroy']);


// 新聞類型
Route::get('/newstype',[NewstypeController::class,'index']);
Route::post('/newstype',[NewstypeController::class,'store']);
Route::put('/newstype/{id}',[NewstypeController::class,'update']);
Route::delete('/newstype/{id}',[NewstypeController::class,'destroy']);


// 學期類型
Route::get('/semester',[SemesterController::class,'index']);
Route::post('/semester',[SemesterController::class,'store']);
Route::put('/semester/{id}',[SemesterController::class,'update']);
Route::delete('/semester/{id}',[SemesterController::class,'destroy']);


// 社團學期
Route::post('/clubsemester',[ClubsemesterController::class,'store']);
Route::put('/clubsemester/{id}',[ClubsemesterController::class,'update']);
Route::delete('/clubsemester/{id}',[ClubsemesterController::class,'destroy']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
