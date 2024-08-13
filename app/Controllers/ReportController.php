<?php

namespace App\Controllers;

use App\Application\Router\Redirect;
use App\Models\Report;

class ReportController
{
    public function create(array $data): void
    {
        // TODO: Data validation

        $report = new Report();
        $report->setEmail($data['email']);
        $report->setSubject($data['subject']);
        $report->setMessage($data['message']);
        $report->store();
        Redirect::to('/php-framework/home');
    }
}