<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class OssUploadController extends AdminController
{
    //
    public function ossUpload(){
        $disk = Storage::disk('oss');
        $config = $disk->signatureConfig($prefix = '/', $callBackUrl = '', $customData = [], $expire = 6000);
        return response()->json($config);

    }
}
