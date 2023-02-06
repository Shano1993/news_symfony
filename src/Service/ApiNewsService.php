<?php

namespace App\Service;

use jcobhams\NewsApi\NewsApi;

class ApiNewsService
{
    public function NewsAgregator($apikey, $category)
    {
        $newsApi = new NewsApi($apikey);
        return $newsApi->getTopHeadLines($category);
    }
}
