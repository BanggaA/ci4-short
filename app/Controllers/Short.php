<?php

namespace App\Controllers;

use App\Models\ShortModel;

class Short extends BaseController
{

    public function index()
    {
        $data = [
            'title' => 'shortened URL',
        ];

        return view('main/home', $data);
    }

    public function searchCounter()
    {
        $data = ['title' => 'URL Click Counter',];
        return view('main/searchCounter', $data);
    }

    public function shortedLink()
    {
        $url = $this->request->getVar('url');
        $user_id = $this->request->getVar('user_id');

        if (substr($url, 0, 4) != 'http') {
            $url = "https://$url";
        };

        $Short_db = new ShortModel();

        $slug = $this->alpanumeric(5);
        $query = $Short_db->where('slug', $slug)->first();

        while ($query) {
            $slug = $this->alpanumeric(5);
            $query = $Short_db->where('slug', $slug)->first();
        }

        $query = [
            'url' => $url,
            'user_id' => $user_id,
            'slug' => $slug,
            'counter' => 0,
            'is_active' => 1,
            'created_at' => date("Y-m-d H:i:s", time())
        ];

        $Short_db->save($query);

        $data = [
            'title' => 'URL Click Counter',
            'url' => $url,
            'slug' => $slug,
        ];
        return view('main/shortedUrl', $data);
    }

    public function alpanumeric($length)
    {
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $characters .= 'abcdefghijklmnopqrstuvwxyz';
        $characters .= '0123456789';

        $result = '';
        for ($i = 0; $i < $length; $i++) {
            $result .= $characters[mt_rand(0, 61)];
        };

        return $result;
    }

    public function urlClickCounter($slug = null)
    {
        if ($slug == null) {
            $slug = $this->request->getVar('slug');
            $slug = substr($slug, -5);
        }

        $Short_db = new ShortModel();
        $query = $Short_db->where('slug', $slug)->first();
        if (!$query) return redirect()->to('/c');

        $data = [
            'title' => 'URL Click Counter',
            'short' => $query,
        ];

        return view('main/counter', $data);
    }

    public function setter()
    {
        $slug = $this->request->getVar('slug');

        $Short_db = new ShortModel();
        $query = $Short_db->where('slug', $slug)->first();
        $is_active = 1;
        if (!$query) return redirect()->to('/');
        if ($query['is_active'] == 1) $is_active = 0;

        $data = [
            'url' => $query['url'],
            'user_id' => $query['user_id'],
            'slug' => $slug,
            'counter' => $query['counter'],
            'is_active' => $is_active,
            'created_at' => $query['created_at']
        ];

        $Short_db->replace($data);
        return redirect()->to('/dashboard');
    }

    public function delete()
    {
        $slug = $this->request->getVar('slug');

        $Short_db = new ShortModel();
        $query = $Short_db->where('slug', $slug)->delete();


        return redirect()->to('/dashboard');
    }


    public function send($slug)
    {
        $Short_db = new ShortModel();
        $query = $Short_db->where('slug', $slug)->first();
        if (!$query || $query['is_active'] == 0) {
            return redirect()->to('/');
        }

        $data = [
            'url' => $query['url'],
            'user_id' => $query['user_id'],
            'slug' => $slug,
            'counter' => $query['counter'] + 1,
            'is_active' => 1,
            'created_at' => $query['created_at']
        ];

        $Short_db->replace($data);
        header("refresh:3;url=$query[url]");
        echo '<circle id="circle" class="circle_animation" r="69.85699" cy="81" cx="81" stroke-width="18" stroke="#95d6fd" fill="none" style="stroke-dashoffset: 440px;"></circle>';
        echo 'You\'ll be redirected in about 5 secs. If not, click <a href="' . $query['url'] . '">here</a>.';
    }
}
