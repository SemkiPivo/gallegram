<?php

namespace App\Controllers;

use App\Models\Report;

class ReportController
{
    public function store(array $data): void
    {
        $report = new Report();
        $report->setEmail($data['email']);
        $report->setSubject($data['subject']);
        $report->setMessage($data['message']);
        dd($report);
    }
}