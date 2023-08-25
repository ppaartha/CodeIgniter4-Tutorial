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
           

        
        echo view('templates/header',$data);
        echo view('blog');
        echo view('templates/footer');
    }
    public function post(){
        $data=[
            'meta_title'=>'Codeigniter 4 Post Page',
            'title'=>'This is an Awesome blog', 

        ];
        echo view('templates/header',$data);
        echo view('single_post');
        echo view('templates/footer');
    }
    
}
