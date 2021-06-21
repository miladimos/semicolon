<?php

namespace App\Http\Controllers\Webmaster\Exports;

use App\Exports\User\UsersExport;
use Maatwebsite\Excel\Excel;

class ExportController
{
    private $excel;

    public function __construct(Excel $excel)
    {
        $this->excel = $excel;
    }

    public function exportViaConstructorInjection()
    {
        return $this->excel->download(new UsersExport(), 'users.xlsx');
    }

    public function exportViaMethodInjection(Excel $excel)
    {
        return $excel->download(new UsersExport(), 'users.xlsx');
    }

    public function exportCSV()
    {
        return (new UsersExport())->download('users.csv', \Maatwebsite\Excel\Excel::CSV, [
            'Content-Type' => 'text/csv',
        ]);
    }

    public function storeExcel()
    {
        return Excel::store(new UsersExport(), 'users.xlsx', 's3');
    }
}
