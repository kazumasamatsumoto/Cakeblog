<?php
declare(strict_types=1);
namespace App\Controller;

class PostsController extends AppController
{
    public $paginate = [
        'limit' => 10,
        'order' => [
            'created' => 'desc'
        ],
        'contain' => 'Users'
    ];

    public function index()
    {
        $posts = $this->paginate($this->Posts->find());
        $this->set(compact('posts'));
    }

    public function view($id = null)
    {
        $post = $this->Posts->get($id, [
            'contain' => 'Users'
        ]);
        $this->set(compact('post'));

    }
}

