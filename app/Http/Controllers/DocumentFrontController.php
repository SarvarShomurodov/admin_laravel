<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function compact;
use function public_path;
use function storage_path;
use function var_dump;
use function view;

class DocumentFrontController extends Controller
{
   public function index()
   {
       $documents = Document::all();
       return view('frontend.document',compact('documents'));
   }
    protected function download($id)
    {
        $data = DB::table('document')->where('id',$id)->first();
        $file = public_path("uploads/{$data->file}");
        return response()->download($file);
    }
}
