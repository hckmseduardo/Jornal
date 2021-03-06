<?php
use Migrations\AbstractMigration;

class CriaProfilesTable extends AbstractMigration
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
        $table = $this->table('profiles');
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->create();
    }
}
