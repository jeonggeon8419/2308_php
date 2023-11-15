<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BoardController extends Controller
{
    public function index() {
        //---------------
        // 쿼리빌더
        //---------------
        $result = DB::select('select * from boards limit 10');

        $result = DB::select('select * from boards limit ? offset ?', [2, 10]);
        
        // $result = DB::select('select * from boards limit ?', [2]);
        // 카테고리가 4, 7, 8인 게시글의 수를 출력해주세요
        $result = DB::select('select count(*) from boards where categories_no = 4 or categories_no = 7 or categories_no = 8');

        // 카테고리별 게시글 갯수를 출력해 주세요
        $result = DB::select('select count(*) from boards group by categories_no');
        
        // 위에거에 + 카테고리명도 같이 출력해 주세요
        $result = DB::select('select ca.no, ca.name, count(ca.no) AS cnt from boards bo join categories ca on bo.categories_no = ca.no group by ca.no, ca.name');

        // 트랜잭션
        //DB
        
        
        // -----------insert------------
        $sql =
        ' insert into boards(title, content, created_at, updated_at, categories_no) '
        .' values(?, ?, ?, ?, ?) ';
        $arr = [
            '제목1'
            ,'내용내용1'
            ,now()
            ,now()
            ,'0'
        ];
        // DB::beginTransaction();
        // DB::insert($sql, $arr);
        // DB::commit();
        
        $result =DB::select('select * from boards order by id desc');
        
        //--------------update-------------
        // DB::beginTransaction();
        // DB::update('update boards set title = ?, content = ? where id = ?',['업데이트1','업업', $result[0]->id]);
        // DB::commit();


        //-------------delete--------------
        // DB::beginTransaction();
        // $result = DB::delete('delete from boards where id = ?', [$result[0]->id]);
        // DB::commit();


        // -------------
        // 쿼리 빌더 체이닝
        // -------------
        // select * from boards where id = 300;
        $result = DB::table('boards')->where('id','=', 300)->get();
        
        // select * from boards where id = 300 or id = 400;
        $result = DB::table('boards')->where('id','=', 300)->orwhere('id', '=', 400)->get();

        // select * from boards where id = 300 or id = 400 order by id DESC;
        $result = DB::table('boards')->where('id','=', 300)->orwhere('id', '=', 400)->orderBy('id', 'desc')->get();

        // select * from categories where no in(1, 2, 3,);
        $result = DB::table('categories')->whereIN('no',[1, 2, 3])->get();

        // select * from categories where no not in(1, 2, 3,);
        $result = DB::table('categories')->whereNotIN('no',[1, 2, 3])->get();

        // first() : limit1하고 비슷하게 동작
        $result = DB::table('boards')->orderBy('id','desc')->first();

        // count() : 결과의 레코드 수를 반환
        $result = DB::table('boards')->count();

        // max() : 해당 컬럼의 최댓값
        $result = DB::table('categories')->max('no');
        
        // min() : 해당 컬럼의 최솟값
        // $result = DB::table('categories')->min('no');

        // 타이틀, 내용, 카테고리명 까지 100개 출력  
        $result =
         DB::table('boards')
        ->select('boards.title', 'boards.content', 'categories.name')
        ->join('categories', 'categories.no','boards.categories_no')
        ->limit(100)
        ->get();

        // 카테고리별 게시글 갯수와 카테고리명을 출력해 주세요
        $result =
        DB::table('categories')
        ->select('no','name')
        ->get();

        $result =
        DB::table('boards')
        ->select('categories.name', 'categories.no', DB::raw('count(categories.no) as cnt'))
        ->join('categories', 'categories.no', 'boards.categories_no')
        ->groupBy('categories.no','categories.name')
        ->get();

        return var_dump($result);
    }
}
