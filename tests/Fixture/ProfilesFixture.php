<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProfilesFixture
 */
class ProfilesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'autoIncrement' => true, 'precision' => null, 'comment' => null],
        'name' => ['type' => 'string', 'length' => 150, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'user_device' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'os' => ['type' => 'string', 'length' => 50, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'age' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'autoIncrement' => null],
        'country' => ['type' => 'string', 'length' => 255, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null, 'collate' => null],
        'created' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        'modified' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'precision' => null, 'comment' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'user_device' => 'Lorem ipsum dolor sit amet',
                'os' => 'Lorem ipsum dolor sit amet',
                'age' => 1,
                'country' => 'Lorem ipsum dolor sit amet',
                'created' => '2020-06-23 13:48:59',
                'modified' => '2020-06-23 13:48:59',
            ],
        ];
        parent::init();
    }
}
