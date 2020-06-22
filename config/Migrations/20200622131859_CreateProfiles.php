<?php
declare(strict_types=1);

use Migrations\AbstractMigration;

class CreateProfiles extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('profiles');
        $table
        ->addColumn('name', 'string', [
                'limit' => 150,
                'null' => false
        ])
        ->addColumn('user_device', 'string', [
                'limit' => 100,
        ])
        ->addColumn('os', 'string', [
            'limit' => 50,
            'null' => false
        ])
        ->addColumn('age', 'integer')
        ->addColumn('country', 'string', [
            'limit' => 255,
            'null' => false
        ])
        ->addColumn('created', 'datetime')
        ->addColumn('modified', 'datetime')
        ->create();
    }
}
