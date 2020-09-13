<?php
namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        return factory(Permission::class, 10)->create();
    }
}
