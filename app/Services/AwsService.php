<?php
namespace App\Services;

class AwsService
{
    public function __construct()
    {
        // ...
    }

    public function getBucketList()
    {
        // Get-pices is a instance profile 
        $s3Client = new \Aws\S3\S3Client([
            'profile' => 'Get-pics',
            'version' => 'latest',
            'region'  => 'ap-southeast-2'
        ]);
        
        return $s3Client->listBuckets();
    }
}
