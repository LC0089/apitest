<?php
namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Request;
class ApiController extends Controller{
    public function userList(){
        $uid = $_GET['id'];
        $data = DB::table('user')->where('id',$uid)->first()->toArray();
        $data=[];
        if($data){
            $datainfo = [
                'error'=>'0',
                'msg'=>'ok',
                'data'=>$data['']
            ];
        }
    }
}