<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Item extends Migration
{
    public function up()
    {
        // create field or column user item
        $this->forge->addField([
            'id'    => [
                'type'              => 'INT',
                'constrain'         => '5',
                'unsigned'          => true,
                'auto_increment'    => true
            ],
            'name'          => [
                'type'              => 'VARCHAR',
                'constrain'         => '100',
            ],
            'description'   => [
                'type'              => 'TEXT',
                'null'              => true,
            ],
            'price'   => [
                'type'              => 'VARCHAR',
                'constrain'         => '30',
            ],
            'image'         => [
                'type'              => 'text',
                'null'              => true,
            ],
            'categories_id'   => [
                'type'              => 'INT',
                'constrain'         => '5',
                'unsigned'          => true,
            ]
        ]);

        // create primary key
        $this->forge->addKey('id', TRUE);

        // add foreign key from table categories
        $this->forge->addForeignKey('categories_id', 'categories', 'id');

        // create table item
        $this->forge->createTable('item', TRUE);        
    }

    public function down()
    {
        // drop table item
        $this->forge->dropTable('item');
    }
}
