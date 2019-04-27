<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                ['name'=>'系统角色','type'=>1,'status'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()],
                ['name'=>'普通角色','type'=>0,'status'=>1,'created_at'=>Carbon::now(),'updated_at'=>Carbon::now()]
            ]
        );
    }
}
