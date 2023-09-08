<?php

namespace App\Services;

use App\Http\Traits\FileImportTrait;
use App\Jobs\CsvImportJob;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

/**
 * Class FileService.
 */
class FileService
{
    use FileImportTrait;

    public function import(Request $request):bool
    {

        $path = $request->file('excel_file');
        $datas = $this->getExcelHeaders($path);
        if($datas)
        {
            $fileName = pathinfo($path->getClientOriginalName(), PATHINFO_FILENAME);
            $tableName = str_replace([' ','-'], '_', strtolower($fileName));
        }
        $file = File::updateOrInsert(
            ['file_name' => $tableName],
        );
        if (!Schema::hasTable($tableName)) {

            if (!empty($datas['header']) && !empty($datas['data'])) {
                Schema::create($tableName, function (Blueprint $table) use ($datas) {
                    $table->id();
                    foreach ($datas['header'] as $header) {
                        $table->string($header)->nullable();
                    }
                });
                // CsvImportJob::dispatch($datas['data'], $tableName);
                $chunked_new_record_array = array_chunk($datas['data'], 3000, true);

                foreach ($chunked_new_record_array as $new_record_chunk) {
                    DB::table($tableName)->insert($new_record_chunk);
                }
                return true;
            } else {

                return false;
            }
        }
        else
        {
            $chunked_new_record_array = array_chunk($datas['data'], 3000, true);

                foreach ($chunked_new_record_array as $new_record_chunk) {
                    DB::table($tableName)->insert($new_record_chunk);
                }

        }
        return true;
    }

}
