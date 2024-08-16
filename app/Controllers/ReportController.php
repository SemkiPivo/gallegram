<?php

namespace App\Controllers;

use App\Application\Request\Request;
use App\Application\Router\Redirect;
use App\Models\Report;

class ReportController
{
    public function create(Request $request): void
    {
        // TODO: Data validation

        $report = new Report();
        $report->setEmail($request->post('email'));
        $report->setSubject($request->post('subject'));
        $report->setMessage($request->post('message'));
        $report->store();
        Redirect::to('/home');
    }
}