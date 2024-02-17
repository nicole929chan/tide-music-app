<?php
namespace App\Services;

use Aws\S3\S3Client;

class AwsService
{
    protected $s3Client;
    private $version = 'latest';
    private $region = 'ap-southeast-2';

    public function __construct()
    {
        $this->s3Client = new S3Client([
            'version' => $this->version,
            'region'  => $this->region,
        ]);
    }

    public function getBucketList()
    {
        return $this->s3Client->listBuckets();
    }

    public function getObjectList($bucket)
    {
        $results = $this->s3Client->listObjects([
            'Bucket' => $bucket
        ]);

        return $results;
    }

    public function getObject($bucket, $key)
    {
        $object = $this->s3Client->getObject([
            'Bucket' => $bucket,
            'Key'    => $key
        ]);

        return $object;
    }

    public function getObjectUrl($bucket, $key)
    {
        $url = $this->s3Client->getObjectUrl($bucket, $key);

        return $url;
    }

    protected function parseContents($contents)
    {
        // 
    }
}
