<?php

namespace App\Controllers;

class Short extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'shorter',
        ];

        // return view('home', $data);
        return view('searchCounter', $data);
    }

    public function send($seg1)
    {
        header("refresh:5;url=$seg1");
        var_dump($seg1);
        echo "You'll be redirected in about 5 secs. If not, click <a href=\"https://$seg1\">here</a>.";
    }

    public function counter($slug)
    {
        return view('welcome_message');
    }
}
