<?php

namespace App\Providers;

use Illuminate\Support\Facades\Response;
use Illuminate\Support\ServiceProvider;

class ResponseMacroServiceProvider extends ServiceProvider
{
    /**
     * 注册响应宏
     *
     * @return void
     */
    public function boot()
    {
        Response::macro('api', function ($msg='',$code=200,$data='') {
           $res = [
               'code'=> 200,
               'msg'=>'success',
               'time'=>time(),
               'data'=>$data
           ];
           return response()->json($res);
        });
    }
}
