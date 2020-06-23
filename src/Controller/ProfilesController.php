<?php
namespace App\Controller;

class ProfilesController extends AppController {
    public $paginate = [
        'limit' => 5,
        'order' => [
            'created' => 'desc'
        ]
    ];

    public function index()
    {
        $profiles = $this->paginate($this->Profiles->find());
        $this->set(compact('profiles'));
    }

    public function view($id = null)
    {
        $profile = $this->Profiles->get($id);
        $this->set(compact('profile'));
    }
}
