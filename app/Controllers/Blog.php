<?php

namespace App\Controllers;


class Blog extends BaseController
{
    public function index()
    {
        $data=[
            'meta_title'=>'Codeigniter 4 blog',
            'title'=>'This is a blog page', 

        ];
        $posts=['Title 1','Title 2','Title 3','Title 4'];
        $data['posts']=$posts;
        return view('blog',$data);
        
    }
    public function post(){
        $data=[
            'meta_title'=>'Codeigniter 4 Post Page',
            'title'=>'This is an Awesome blog', 

        ];
       
        return view('single_post',$data);
       
    }
    
}
