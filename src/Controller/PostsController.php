<?php
declare(strict_types=1);
namespace App\Controller;

class PostsController extends AppController
{
    // public $autoRender = false; // 自動読み込みを止めます
    public function initialize(): void // 初期化
    {
        parent::initialize();
        $this->viewBuilder()->setLayout('test');
    }

    public function index()
    {
        // $indexTitle = 'Indexだよ.php';
        // $this->set(['indexTitle' => $indexTitle]);
    }

    public function view($id = null)
    {
        // $this->set(['id' => $id]); // 引数の受け渡し
        $viewTitle = 'View.php'; // 変数の宣言
        // $this->viewBuilder()->disableAutoLayout(); // レイアウトの非表示
        $this->viewBuilder()->setLayout('test'); // レイアウトの取得
        $this->set(compact(['id']));
        // $this->set(compact('id', 'viewTitle'));
        // $this->render('index'); // htmlのみかな？index.phpの情報を取得できる
    }
}

