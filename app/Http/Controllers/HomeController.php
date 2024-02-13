<?php

namespace App\Http\Controllers;

use App\Services\AwsService;

class HomeController extends Controller
{
    public function index(AwsService $awsService)
    {
        $bucketList = $awsService->getBucketList();
        dd($bucketList);
    }
}
