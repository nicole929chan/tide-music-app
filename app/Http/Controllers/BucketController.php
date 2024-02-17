<?php

namespace App\Http\Controllers;

use App\Services\AwsService;
use Illuminate\Http\Request;

class BucketController extends Controller
{
    protected $awsService;
    
    public function __construct(AwsService $awsService)
    {
        $this->awsService = $awsService;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bucketList = $this->awsService->getBucketList();
        $buckets = $bucketList['Buckets'];
        
        return view('Bucket.index', compact('buckets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $name
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        $results = $this->awsService->getObjectList($name);
        $contents = $results['Contents'];
        foreach ($contents as $i => &$content) {
            $extension = pathinfo($content['Key'], PATHINFO_EXTENSION);
            if (in_array($extension, ['jpg', 'jpeg', 'png', 'gif'])) {
                $url = $this->awsService->getObjectUrl($name, $content['Key']);
                $content['url'] = $url;
            } else {
                $content['url'] = '';
            }
        }

        return view('Bucket.show', compact('contents'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
