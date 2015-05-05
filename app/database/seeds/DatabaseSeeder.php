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
          array('firstname' => 'Aaron', 'lastname' => 'duchateau', 'phone' => '541-653-0973', 'email' => 'chateauconcept@gmail.com', 'password' => Hash::make('asdfasdf') ),
      		array('firstname' => 'Nash', 'lastname' => 'Gambee', 'phone' => '541-513-0628', 'email' => 'ibgambee@yahoo.com', 'password' => Hash::make('test123123') ),
      		array('firstname' => 'Kent', 'lastname' => 'Gambee', 'phone' => '541-288-3315', 'email' => 'alpinepropertiesllc@gmail.com', 'password' => Hash::make('licorice0221') ),
          array('firstname' => 'Andrew', 'lastname' => 'Cook', 'phone' => '541-729-1228', 'email' => 'andrewkcook@gmail.com', 'password' => Hash::make('test123123') ),
          array('firstname' => 'Ben', 'lastname' => 'Hickman', 'phone' => '503-319-7057', 'email' => 'Ben@BenHickmanDesign.com', 'password' => Hash::make('ben1234') ),
          array('firstname' => 'Matthew', 'lastname' => 'Hall', 'phone' => '503-510-8161', 'email' => 'Matthew.Hall@usbank.com', 'password' => Hash::make('matt1234') ),
		    ));
        $this->command->info('users seeded INSIDE called!');
    }

}

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
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Benton County', 
      			  'countyNameConcat' => 'BentonCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Clackamas County', 
      			  'countyNameConcat' => 'ClackamasCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Clatsop County', 
      			  'countyNameConcat' => 'ClatsopCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Columbia County', 
      			  'countyNameConcat' => 'ColumbiaCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Coos County', 
      			  'countyNameConcat' => 'CoosCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Crook County', 
      			  'countyNameConcat' => 'CrookCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Curry County', 
      			  'countyNameConcat' => 'CurryCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Deschutes County', 
      			  'countyNameConcat' => 'DeschutesCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Douglas County', 
      			  'countyNameConcat' => 'DouglasCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.780921', 
      			  'startLng' =>'-123.277734', 
      			  'remoteTableId' => '1ZSksrfd9GTbkEnqmuISHplM1lLKyWdRMZbEhOfoX', 
      			  'nestedMapColumnName' => 'ID', 
      			  'active' => true),

        	array('countyName' => 'Gilliam County', 
      			  'countyNameConcat' => 'GilliamCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Grant County', 
      			  'countyNameConcat' => 'GrantCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Harney County', 
      			  'countyNameConcat' => 'HarneyCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Hood River County', 
      			  'countyNameConcat' => 'HoodRiverCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Jackson County', 
      			  'countyNameConcat' => 'JacksonCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => true),

        	array('countyName' => 'Jefferson County', 
      			  'countyNameConcat' => 'JeffersonCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Josephine County', 
      			  'countyNameConcat' => 'JosephineCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Klamath County', 
      			  'countyNameConcat' => 'KlamathCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

        	array('countyName' => 'Lake County', 
      			  'countyNameConcat' => 'LakeCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Lane County',
            	  'countyNameConcat' => 'LaneCounty', 
            	  'stateId' => '38', 
            	  'stateAb' =>'OR', 
            	  'startLat' =>'44.048461', 
      			  'startLng' =>'-123.085537', 
            	  'remoteTableId' => '1QD4JANRJFJ2_G4pWypW4ofQO0ShK0iHtKPEciTt1', 
            	  'nestedMapColumnName' => 'maptaxlot', 
            	  'active' => true),

            array('countyName' => 'Lincoln County', 
      			  'countyNameConcat' => 'LincolnCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Linn County', 
      			  'countyNameConcat' => 'LinnCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Malheur County', 
      			  'countyNameConcat' => 'MalheurCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Marion County', 
      			  'countyNameConcat' => 'MarionCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Morrow County', 
      			  'countyNameConcat' => 'MorrowCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Multnomah County', 
      			  'countyNameConcat' => 'MultnomahCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Polk County', 
      			  'countyNameConcat' => 'PolkCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Sherman County', 
      			  'countyNameConcat' => 'ShermanCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Tillamook County', 
      			  'countyNameConcat' => 'TillamookCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Umatilla County', 
      			  'countyNameConcat' => 'UmatillaCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Union County', 
      			  'countyNameConcat' => 'UnionCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Wallowa County', 
      			  'countyNameConcat' => 'WallowaCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Wasco County', 
      			  'countyNameConcat' => 'WascoCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Washington County', 
      			  'countyNameConcat' => 'WashingtonCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Wheeler County', 
      			  'countyNameConcat' => 'WheelerCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
      			  'active' => false),

            array('countyName' => 'Yamhill County', 
      			  'countyNameConcat' => 'YamhillCounty', 
      			  'stateId' => '38', 
      			  'stateAb' =>'OR', 
      			  'startLat' =>'42.320921', 
      			  'startLng' =>'-122.877734', 
      			  'remoteTableId' => '1w27IrwI0eK0nr9_dXm70L56EnzGpb6t_4HC1XZ_a', 
      			  'nestedMapColumnName' => 'ACCOUNT', 
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


