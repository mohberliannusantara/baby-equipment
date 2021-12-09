<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        // create field or column user table
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constrain'         => '5',
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'name'  => [
                'type'              => 'VARCHAR',
                'constrain'         => '100',
            ],
            'email'  => [
                'type'              => 'VARCHAR',
                'constrain'         => '100',
            ],
            'password'  => [
                'type'              => 'VARCHAR',
                'constrain'         => '30',
            ],
            'phone'  => [
                'type'              => 'VARCHAR',
                'constrain'         => '13',
            ]
        ]);

        // create primary key
        $this->forge->addKey('id', TRUE);

        // create table user
        $this->forge->createTable('user', TRUE);
    }

    public function down()
    {
        // drop table user
        $this->forge->dropTable('user');
    }
}
