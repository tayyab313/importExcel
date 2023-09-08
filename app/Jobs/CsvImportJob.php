<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\DB;
use SplFileObject;


class CsvImportJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $data;
    protected $tableName;

    public function __construct($data, $tableName)
    {
        $this->data = $data;
        $this->tableName = $tableName;
    }

    public function handle()
    {
        $chunked_new_record_array = array_chunk($this->data, 5000, true);

                foreach ($chunked_new_record_array as $new_record_chunk) {
                    DB::table($this->tableName)->insert($new_record_chunk);
                }
    }
}
