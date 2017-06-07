<?php

namespace App\Http\Controllers\home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{

    public function image(Request $request){
        $file = $request->file('image');
        if($file->isValid()){
            $originalName = $file->getClientOriginalName();
            $ext = $file->getClientOriginalExtension();
            $type = $file->getClientMimeType();
            $realPath = $file->getRealPath();
            $filename = date('YmdHis').'-'.uniqid().'.'.$ext;
            $bool = Storage::disk('uploads')->put($filename,file_get_contents($realPath));
            if($bool){
                return '/uploads/'.$filename;
            }else{
                return 'error|上传失败';
            }
        }

    }
}
