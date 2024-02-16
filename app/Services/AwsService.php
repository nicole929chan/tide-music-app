<?php
namespace App\Services;

use Aws\S3\S3Client;

class AwsService
{
    protected $s3Client;
    public function __construct()
    {
        $this->s3Client = new S3Client([
            'version' => 'latest',
            'region'  => 'ap-southeast-2'
        ]);
    }

    public function getBucketList()
    {
        // Get-pices is a instance profile 
        // $s3Client = new \Aws\S3\S3Client([
        //     'profile' => 'Get-pics',
        //     'version' => 'latest',
        //     'region'  => 'ap-southeast-2'
        // ]);
        
        // return $s3Client->listBuckets();
        return $this->s3Client->listBuckets();
    }
}
