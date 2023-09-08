<?php

namespace App\Http\Controllers;

use App\Http\Requests\importFileRequest;
use App\Models\File;
use App\Services\FileService;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ExcelImportController extends Controller
{
    public function __construct(private FileService $fileService){}

    public function index(){
        $getfiles = File::all();
        return view('welcome',compact('getfiles'));
    }

    public function fileDetail($fileName){
        $columnNames = Schema::getColumnListing($fileName);
        $getfiles = DB::table($fileName)->paginate(10);

        return view('Pages.view',compact('getfiles','columnNames'));
    }
    public function import(importFileRequest $request)
    {

        $result = $this->fileService->import($request);
        if($result)
        {
            return redirect()->back()->with('success', 'File imported successfully.');
        }

        return redirect()->back()->with('error', 'Something Went Wrong');
    }

}
