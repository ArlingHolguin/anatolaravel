<?php

namespace Database\Seeders;

use App\Models\Agencia;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AgencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Crear agencias principales
        $principales = Agencia::factory(5)->create(['type' => 'Principal']);

        // Crear sucursales
        $sucursales = Agencia::factory(15)->create(['type' => 'Sucursal']);

        // Asignar sucursales a principales
        $principales->each(function ($principal) use ($sucursales) {
            // Asignar entre 1 y 3 sucursales aleatorias a cada principal
            $asignadas = $sucursales->random(rand(1, 3));

            foreach ($asignadas as $sucursal) {
                DB::table('sucursals')->insert([
                    'parent_id' => $principal->id,
                    'child_id' => $sucursal->id,
                    'created_at' => now(),
                    'updated_at' => now(),
                ]);
            }
        });
    }
}
