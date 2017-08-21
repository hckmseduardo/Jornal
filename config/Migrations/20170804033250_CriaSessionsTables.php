<?php
use Migrations\AbstractMigration;

class CriaSessionsTables extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $table = $this->table('sessions');
        
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        
        $table->addColumn('product_Id', 'integer', [
            'default' => null,
            'null' => false,
        ]);        

        $table->create();
    }
}
