<?php
namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        return factory(Role::class, 10)->create();
    }
}
