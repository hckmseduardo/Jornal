<?php
use Migrations\AbstractMigration;

class AddPhonesTable extends AbstractMigration
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
        $table = $this->table('phones');

        $table->addColumn('client_id', 'integer', [
            'null' => false,
        ]);

        $table->addColumn('phone', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('type', 'integer', [
            'null' => false,
        ]);

        $table->addColumn('contactName', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->create();    }
}
