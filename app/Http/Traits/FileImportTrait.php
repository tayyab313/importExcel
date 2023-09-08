<?php
namespace App\Http\Traits;

trait FileImportTrait {

    public function getExcelHeaders($path):array
    {
        // Check if the file exists
        if (!file_exists($path)) {
            return [];
        }

        // Open the file for reading with format and encoding specified
        $file = fopen($path, 'r');
        if ($file === false) {
            return [];
        }

        // Read the first row (header row)
        $headers = fgetcsv($file, 0, ",", '"', "\n");
        $data = [];
        while (($row = fgetcsv($file)) !== false) {
            // Process each row of data here
            $rowData = array_combine($headers, $row);
            $data[] = $rowData;
        }
        // Close the file
        fclose($file);
        $lowercaseHeaders = array_map(function ($header) {
            return str_replace(' ', '_', strtolower($header));
        }, $headers);
        return ['header'=>$lowercaseHeaders,'data'=>$data];
    }
}
