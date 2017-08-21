<?php
use Migrations\AbstractMigration;

class AddVendedoresTable extends AbstractMigration
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
        $table = $this->table('sellers');
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->addColumn('phone', 'string', [
            'limit' => 15,
            'null' => false,
        ]);        
        $table->addColumn('cellphone', 'string', [
            'limit' => 15,
            'null' => false,
        ]);        
        $table->create();
    }
}
