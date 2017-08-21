<?php
use Migrations\AbstractMigration;

class AddClientsTable extends AbstractMigration
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
        $table = $this->table('clients');        
        $table->addColumn('name', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('razaoSocial', 'string', [
            'limit' => 255,
            'null' => false,
        ]);
        $table->addColumn('type', 'integer', [
            'null' => false,
        ]);
        $table->addColumn('cpf', 'string', [
            'limit' => 14,
            'null' => false,
        ]);
        $table->addColumn('cnpj', 'string', [
            'limit' => 18,
            'null' => false,
        ]);
        $table->addColumn('ie', 'string', [
            'limit' => 20,
            'null' => false,
        ]);

        $table->addColumn('im', 'string', [
            'limit' => 20,
            'null' => false,
        ]);

        $table->create();
    }
}
