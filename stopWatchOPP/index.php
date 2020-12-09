<?php
date_default_timezone_set('Asia/Ho_Chi_Minh');
class StopWatch
{
    private $startTime;
    private $endTime;

    function __construct()
    {
        $this->startTime = time();
    }

    function getStartTime()
    {
        return $this->startTime;
    }

    function getEndTime()
    {
        return $this->endTime;
    }

    function start()
    {
        $this->startTime =  time();
    }

    function stop()
    {
        $this->endTime =  time();
    }

    function getElapsedTime()
    {
        return  $this->endTime - $this->startTime;
    }
}

$watch = new StopWatch();
$watch->start();

file_get_contents('https://www.google.com.vn/');

$watch->stop();
$kq = $watch->getElapsedTime();
echo $kq;
