<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function getPosts()
    {
        #get
        $response = \Illuminate\Support\Facades\Http::get('https://jsonplaceholder.typicode.com/posts');

//        return $response->effectiveUri();
          return $response->json();
    }

    public function getPostById($id)
    {
        $response = \Illuminate\Support\Facades\Http::get('https://jsonplaceholder.typicode.com/posts/'.$id);

        return $response->json();
    }
    public function addPost()
    {
        #encoded
        // $response = \Illuminate\Support\Facades\Http::asForm()->post('https://jsonplaceholder.typicode.com/posts');

        $post = \Illuminate\Support\Facades\Http::post('https://jsonplaceholder.typicode.com/posts',[
            'userId' => 1,
            'title' => 'new title',
            'body' => 'this is a body',
        ]);
        return $post->json();


    }

    public function updatePostById($id)
    {
        $response = \Illuminate\Support\Facades\Http::put('https://jsonplaceholder.typicode.com/posts/'.$id ,[
            'title' => 'new title',
            'body' => 'this is a body',
        ]);

        return $response->json();
    }

    public function deletePostById($id)
    {
        $response = \Illuminate\Support\Facades\Http::delete('https://jsonplaceholder.typicode.com/posts/'.$id);

        return $response->json();
    }


}
