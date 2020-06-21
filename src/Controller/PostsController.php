<?php
declare(strict_types=1);
namespace App\Controller;

class PostsController extends AppController
{
    public $paginate = [
        'limit' => 2,
        'order' => [
            'created' => 'desc'
        ]
    ];

    public function index()
    {
        $posts = $this->paginate($this->Posts->find());
        $this->set(compact('posts'));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id);
        $this->set(compact('post'));

    }
}

