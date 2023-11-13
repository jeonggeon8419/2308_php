<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

//------------
// 라우터 정의
//------------
// 문자열 리턴
route::get('/hi', function () {
    return '안녕하세요';
});

// 없는 뷰파일을 리턴할 때
Route::get('/myview', function() {
    return view('welcome.blade');
});

// -----------------------------------
// http 메소드 대응하는 라우터
// 여러 라우터에 해당될 경우 가장 마지막에 정의 된것이 실행
// ------------------------------------
// get매소드로 localhost/home로 접속했을 떄 home라는 뷰파일을 리턴해주세요.
Route::get('/home', function() {
    return view('home');
});

Route::post('/home', function() {
    return '매소드 : POST';
});

//get, post, put, delete

// PUT 요청
// view의 form에 [@method('PUT')]을 추가
Route::put('/home', function () {
    return '매소드 : PUT';
});

// Delete 요청
Route::delete('/home', function () {
    return '매소드 : delete';
});

//--------------------
// 라우터에서 파라미터 제어
//--------------------
// 쿼리 스트링에 파라미터가 셋팅되서 요청이 올 떄 파라미터 획득
Route::get('/query', function(Request $request) {
    return $request->id.", ".$request->name;
});

// URL 세그먼트로 지정 파라미터 획득
Route::get('/segment/{id}', function($id) {
    return '세그먼트 파라파라 :'.$id;
});

// 2개 이상의 URL 세그먼트로 지정 파라미터 획득
Route::get('/segment/{id}/{name}', function($id, $name) {
    return '세그먼트 파라파라 2개이상 :'.$id.', '.$name;
});

Route::get('/segment2/{id}/{name}', function(Request $request, $id) {
    return '세그먼트 파라미터 22222 : '.$request->id.', '.$id.', ' .$request->name; 
    // return var_dump($request);
});

// URL 세그먼트로 지정 파라미터 획득 : 기본값 설정
route::get('/segment3/{id?}', function($id = 'base') {
    return 'segment3 : '.$id;
});

// ------------------
// 라우트 매칭 실패시 대체 라우트 정의
// ------------------
route::fallback(function() {
    return '다시 돌아가';
});

//--------------
// 라우터의 이름 지정
// -------------
route::get('/name', function() {
    return view('name');
});
route::get('/name/home/php504/root', function() {
    return '한강이 보이는 집';
});
route::get('/name/home/php504/user', function() {
    return '한강이 안보이는 집';
})->name('name.user'); //체이닝 기법

//--------------
//컨트롤러 만들기
//--------------

// 커멘드로 컨트롤러 생성 : php artisan make:controller 컨트롤러명
use App\Http\Controllers\TestController;
// 해당기능명.액션명
route::get('/test', [TestController::class, 'index'])->name('test.index');

// php artisan make:controller 컨트롤러명 --resource
use App\Http\Controllers\TaskController;
Route::resource('/task', TaskController::class);

//GET|HEAD        task .................... task.index › TaskController@index  
//POST            task .................... task.store › TaskController@store  
//GET|HEAD        task/create ............. task.create › TaskController@create  
//GET|HEAD        task/{task} ............. task.show › TaskController@show  
//PUT|PATCH       task/{task} ............. task.update › TaskController@update  
//DELETE          task/{task} ............. task.destroy › TaskController@destroy  
//GET|HEAD        task/{task}/edit ........ task.edit › TaskController@edit


// 블레이드 템플릿 용
route::get('/child1', function() {
    $arr = [
        '이름' => '홍길동'
        ,'나이' => '32'
        ,'성별' => '남자'
    ];
    $arr2 = [];
    return view('child1')
    ->with('gender', '1')
    ->with('data',$arr)
    ->with('data2',$arr2);
    
 
});

route::get('/child2', function() {
    return view('child2');
});