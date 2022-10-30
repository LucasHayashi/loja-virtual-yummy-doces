<?php
require_once 'global.php';
echo "Hello World!";


$s3_bucket1 = getenv('S3_BUCKET');
$s3_bucket2 = $_ENV['S3_BUCKET'];
$s3_bucket3 = $_SERVER['S3_BUCKET'];

echo $s3_bucket1;
echo $s3_bucket2;
echo $s3_bucket3;
?>