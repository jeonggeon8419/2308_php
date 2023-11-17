<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{   
    // 전체 게시글 조회
    public function index() {
        $responseData = [
            'code' => '0'
            ,'msg' => ''
            ,'data' => []
        ];

        $result = Item::orderBy('created_at', 'desc')->get();

        if($result->count()< 1){
          $responseData['code'] = 'E01';
          $responseData['msg'] = 'No Data';
        } else {
            $responseData['data'] =$result;   
        }
        return $responseData;
    }

    // 게시글 작성
    public function store(Request $request) {
        $responseData = [
            'code' => '0'
            ,'msg' => ''
            ,'data' => []
        ];

        $result = Item::create($request->data);

        $responseData['data'] = $result;

        return $responseData;
    }
}
