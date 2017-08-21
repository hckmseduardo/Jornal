<?php
use Migrations\AbstractMigration;

class AddAdressesTable extends AbstractMigration
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
        $table = $this->table('addresses');

        $table->addColumn('client_id', 'integer', [
            'null' => false,
        ]);

        $table->addColumn('adrress', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('adrress2', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('cep', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('neighborhood', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('city', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('state', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->addColumn('country', 'string', [
            'limit' => 255,
            'null' => false,
        ]);

        $table->create();

    }
}
