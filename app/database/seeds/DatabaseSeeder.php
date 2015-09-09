<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();
		$this->call('userSeeder');
		$this->command->info('Users seeded!');

		$this->call('UsStateSeeder');
		$this->command->info('Us States seeded!');

		$this->call('countySeeder');
		$this->command->info('counties seeded!');
	}
}

class userSeeder extends Seeder {

    public function run()
    {	
    	//DB::table('counties')->delete();
    	
    	//Counties::create(array());
        DB::table('users')->delete();
        DB::table('users')->insert(
        array(
          array('firstname' => 'Aaron', 'lastname' => 'duchateau', 'phone' => '541-653-0973', 'email' => 'chateauconcept@gmail.com', 'password' => Hash::make('asdfasdf'), 'accountType' => 'standard' ),
      		array('firstname' => 'Nash', 'lastname' => 'Gambee', 'phone' => '541-513-0628', 'email' => 'ibgambee@yahoo.com', 'password' => Hash::make('test123123'), 'accountType' => 'timber' ),
      		array('firstname' => 'Kent', 'lastname' => 'Gambee', 'phone' => '541-288-3315', 'email' => 'alpinepropertiesllc@gmail.com', 'password' => Hash::make('licorice0221'), 'accountType' => 'timber' ),
          array('firstname' => 'Andrew', 'lastname' => 'Cook', 'phone' => '541-729-1228', 'email' => 'andrewkcook@gmail.com', 'password' => Hash::make('test123123'), 'accountType' => 'standard' ),
          array('firstname' => 'Ben', 'lastname' => 'Hickman', 'phone' => '503-319-7057', 'email' => 'Ben@BenHickmanDesign.com', 'password' => Hash::make('ben1234'), 'accountType' => 'standard' ),
          array('firstname' => 'Matthew', 'lastname' => 'Hall', 'phone' => '503-510-8161', 'email' => 'Matthew.Hall@usbank.com', 'password' => Hash::make('matt1234'), 'accountType' => 'standard' ),
          array('firstname' => 'Peter', 'lastname' => 'Shin', 'phone' => '503-510-8161', 'email' => 'peter@peter.com', 'password' => Hash::make('peter1234'), 'accountType' => 'standard' ),
          array('firstname' => 'Test', 'lastname' => 'Account', 'phone' => '503-510-8161', 'email' => 'test@test.com', 'password' => Hash::make('test1234'), 'accountType' => 'standard' )
		    ));
        $this->command->info('WHAT THE FUCK!');
        $this->command->info('users seeded INSIDE called!');
    }

}


//note: below are NO longer used, to do, eliminate. 
//'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
//'nestedMapColumnName' => 'ACCOUNT', 
//Also countyName, countyNameConcat, and countyName Bare should be merged with underscores
class countySeeder extends Seeder {

    public function run()
    {	
    	//DB::table('counties')->delete();
    	
    	//Counties::create(array());
        DB::table('counties')->delete();
        DB::table('counties')->insert(
        array(
        	array('countyName' => 'Baker County', 
      			  'countyNameConcat' => 'BakerCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Benton County', 
      			  'countyNameConcat' => 'BentonCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Clackamas County', 
      			  'countyNameConcat' => 'ClackamasCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Clatsop County', 
      			  'countyNameConcat' => 'ClatsopCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Columbia County', 
      			  'countyNameConcat' => 'ColumbiaCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Coos County', 
      			  'countyNameConcat' => 'CoosCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Crook County', 
      			  'countyNameConcat' => 'CrookCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Curry County', 
      			  'countyNameConcat' => 'CurryCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Deschutes County', 
      			  'countyNameConcat' => 'DeschutesCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Douglas County', 
      			  'countyNameConcat' => 'DouglasCounty', 
              'countyNameBare' => 'Douglas', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.780921', 
      			  'startLng' =>'-123.277734', 
      			  'remoteTableId' => '1ZSksrfd9GTbkEnqmuISHplM1lLKyWdRMZbEhOfoX', 
      			  'nestedMapColumnName' => 'ID', 
              'statefp' => '41', 
      			  'active' => true),

        	array('countyName' => 'Gilliam County', 
      			  'countyNameConcat' => 'GilliamCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Grant County', 
      			  'countyNameConcat' => 'GrantCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Harney County', 
      			  'countyNameConcat' => 'HarneyCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Hood River County', 
      			  'countyNameConcat' => 'HoodRiverCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Jackson County', 
      			  'countyNameConcat' => 'JacksonCounty', 
              'countyNameBare' => 'Jackson', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => true),

        	array('countyName' => 'Jefferson County', 
      			  'countyNameConcat' => 'JeffersonCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Josephine County', 
      			  'countyNameConcat' => 'JosephineCounty', 
              'countyNameBare' => 'Josephine', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.410998', 
      			  'startLng' =>'-123.314088999', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'account', 
              'statefp' => '41', 
      			  'active' => true),

        	array('countyName' => 'Klamath County', 
      			  'countyNameConcat' => 'KlamathCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

        	array('countyName' => 'Lake County', 
      			  'countyNameConcat' => 'LakeCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Lane County',
            	  'countyNameConcat' => 'LaneCounty', 
                'countyNameBare' => 'Lane', 
            	  'stateId' => '38', 
            	  'stateAb' =>'OR', 
            	  'startLat' =>'44.048461', 
      			  'startLng' =>'-123.085537', 
            	  'remoteTableId' => '1QD4JANRJFJ2_G4pWypW4ofQO0ShK0iHtKPEciTt1', 
            	  'nestedMapColumnName' => 'maptaxlot', 
                'statefp' => '41', 
            	  'active' => true),

            array('countyName' => 'Lincoln County', 
      			  'countyNameConcat' => 'LincolnCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Linn County', 
      			  'countyNameConcat' => 'LinnCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Malheur County', 
      			  'countyNameConcat' => 'MalheurCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Marion County', 
      			  'countyNameConcat' => 'MarionCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Morrow County', 
      			  'countyNameConcat' => 'MorrowCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Multnomah County', 
      			  'countyNameConcat' => 'MultnomahCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Polk County', 
      			  'countyNameConcat' => 'PolkCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Sherman County', 
      			  'countyNameConcat' => 'ShermanCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Tillamook County', 
      			  'countyNameConcat' => 'TillamookCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Umatilla County', 
      			  'countyNameConcat' => 'UmatillaCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Union County', 
      			  'countyNameConcat' => 'UnionCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Wallowa County', 
      			  'countyNameConcat' => 'WallowaCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Wasco County', 
      			  'countyNameConcat' => 'WascoCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Washington County', 
      			  'countyNameConcat' => 'WashingtonCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Wheeler County', 
      			  'countyNameConcat' => 'WheelerCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false),

            array('countyName' => 'Yamhill County', 
      			  'countyNameConcat' => 'YamhillCounty', 
              'countyNameBare' => 'Baker', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
              'statefp' => '41', 
      			  'active' => false)

		));
        $this->command->info('counties seeded INSIDE called!');
    }

}

class UsStateSeeder extends Seeder {

    public function run()
    {
    	//DB::table('usStates')->delete();
    	
    	//UsStates::create(array());

        DB::table('usStates')->insert(
        array(
            array('name' => 'Alabama', 'code' => 'AL'),
            array('name' => 'Alaska', 'code' => 'AK'),
            array('name' => 'Arizona', 'code' => 'AZ'),
            array('name' => 'Arkansas', 'code' => 'AR'),
            array('name' => 'California', 'code' => 'CA'),
            array('name' => 'Colorado', 'code' => 'CO'),
            array('name' => 'Connecticut', 'code' => 'CT'),
            array('name' => 'Delaware', 'code' => 'DE'),
            array('name' => 'District of Columbia', 'code' => 'DC'),
            array('name' => 'Florida', 'code' => 'FL'),
            array('name' => 'Georgia', 'code' => 'GA'),
            array('name' => 'Hawaii', 'code' => 'HI'),
            array('name' => 'Idaho', 'code' => 'ID'),
            array('name' => 'Illinois', 'code' => 'IL'),
            array('name' => 'Indiana', 'code' => 'IN'),
            array('name' => 'Iowa', 'code' => 'IA'),
            array('name' => 'Kansas', 'code' => 'KS'),
            array('name' => 'Kentucky', 'code' => 'KY'),
            array('name' => 'Louisiana', 'code' => 'LA'),
            array('name' => 'Maine', 'code' => 'ME'),
            array('name' => 'Maryland', 'code' => 'MD'),
            array('name' => 'Massachusetts', 'code' => 'MA'),
            array('name' => 'Michigan', 'code' => 'MI'),
            array('name' => 'Minnesota', 'code' => 'MN'),
            array('name' => 'Mississippi', 'code' => 'MS'),
            array('name' => 'Missouri', 'code' => 'MO'),
            array('name' => 'Montana', 'code' => 'MT'),
            array('name' => 'Nebraska', 'code' => 'NE'),
            array('name' => 'Nevada', 'code' => 'NV'),
            array('name' => 'New Hampshire', 'code' => 'NH'),
            array('name' => 'New Jersey', 'code' => 'NJ'),
            array('name' => 'New Mexico', 'code' => 'NM'),
            array('name' => 'New York', 'code' => 'NY'),
            array('name' => 'North Carolina', 'code' => 'NC'),
            array('name' => 'North Dakota', 'code' => 'ND'),
            array('name' => 'Ohio', 'code' => 'OH'),
            array('name' => 'Oklahoma', 'code' => 'OK'),
            array('name' => 'Oregon', 'code' => 'OR'),
            array('name' => 'Pennsylvania', 'code' => 'PA'),
            array('name' => 'Rhode Island', 'code' => 'RI'),
            array('name' => 'South Carolina', 'code' => 'SC'),
            array('name' => 'South Dakota', 'code' => 'SD'),
            array('name' => 'Tennessee', 'code' => 'TN'),
            array('name' => 'Texas', 'code' => 'TX'),
            array('name' => 'Utah', 'code' => 'UT'),
            array('name' => 'Vermont', 'code' => 'VT'),
            array('name' => 'Virginia', 'code' => 'VA'),
            array('name' => 'Washington', 'code' => 'WA'),
            array('name' => 'West Virginia', 'code' => 'WV'),
            array('name' => 'Wisconsin', 'code' => 'WI'),
            array('name' => 'Wyoming', 'code' => 'WY')
		));
    }

}


