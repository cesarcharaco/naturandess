<?php

use Illuminate\Database\Seeder;

class PromocionesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('promociones')->insert([
	        'promocion' => 'Bidones 3 x 1',
			'descripcion' => 'Compra 3 bidones y te regalamos 1',
			'monto' => '300',
			'status' => 'Activo'
    	]);
    }
}
