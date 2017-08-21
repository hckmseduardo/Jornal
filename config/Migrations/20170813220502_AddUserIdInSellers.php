<?php
use Migrations\AbstractMigration;

class AddUserIdInSellers extends AbstractMigration
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
        $table->addColumn('user_id', 'string', [
            'limit' => 255,
            'null' => false,
        ]);        
        $table->update();
    }
}
