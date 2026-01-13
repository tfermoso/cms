<?php
declare(strict_types=1);

use Migrations\BaseSeed;

class UsersSeed extends BaseSeed
{
    public function run(): void
    {
        $data = [
            [
                'email' => 'admin@example.com',
                'password' => 'admin123',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user1@example.com',
                'password' => 'password1',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user2@example.com',
                'password' => 'password2',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user3@example.com',
                'password' => 'password3',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user4@example.com',
                'password' => 'password4',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user5@example.com',
                'password' => 'password5',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user6@example.com',
                'password' => 'password6',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user7@example.com',
                'password' => 'password7',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user8@example.com',
                'password' => 'password8',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
            [
                'email' => 'user9@example.com',
                'password' => 'password9',
                'created' => date('Y-m-d H:i:s'),
                'modified' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->table('users')->insert($data)->save();
    }
}
