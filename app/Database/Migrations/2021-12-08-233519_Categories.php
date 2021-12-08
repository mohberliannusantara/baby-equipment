<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Categories extends Migration
{
    public function up()
    {
        // create field or column user categories
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constrain'         => '5',
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'name'  => [
                'type'              => 'VARCHAR',
                'constrain'         => '5',
            ],
        ]);

        // create primary key
        $this->forge->addKey('id', TRUE);

        // create table news
        $this->forge->createTable('categories', TRUE);
    }

    public function down()
    {
        // drop table user
        $this->forge->dropTable('categories');
    }
}
