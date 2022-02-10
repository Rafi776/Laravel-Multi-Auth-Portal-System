<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MediateamsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mediateam')->insert([
        'disname' = $request->disname;
         'division' = $request->division;
        'dissecretary' = $request->dissecretary;
        'secphone' = $request->secphone;
        'disemail' = $request->disemail;
        'mtname' = $request->mtname;
        'mtphone' = $request->mtphone;
        'mtemail' = $request->mtemail;
        ]);
    }
        
    }
}
