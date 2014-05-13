<?php

class ParticularityLocationTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		// DB::table('particularity_location')->truncate();
		$particularity = array('1','2','3','4');
		$street = array(
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue du chat',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue Mars',
			'Rue des pommes',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue frie',
			'Rue du Belge',
			'Rue du terne',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue des anonymes',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue de la santée',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue des Chaufoures',
			'Rue Grand rue',
			'Rue de fer',
			'Rue de l\'ange',
			'Rue de ferrer',
			'Rue de Basse Montagne',
			'Chaussée de Dinant',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue du pargé',
			'Rue de Tongres',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue du chat',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue Mars',
			'Rue des pommes',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue frie',
			'Rue du Belge',
			'Rue du terne',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue des anonymes',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue de la santée',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue des Chaufoures',
			'Rue Grand rue',
			'Rue de fer',
			'Rue de l\'ange',
			'Rue de ferrer',
			'Rue de Basse Montagne',
			'Chaussée de Dinant',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue du pargé',
			'Rue de Tongres',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue du chat',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de Dieu',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue de la Montagne',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue parfaite',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue Jean-Michel',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue des lacs',
			'Rue Mars',
			'Rue des pommes',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue des gens',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue noble',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue du jou',
			'Rue frie',
			'Rue du Belge',
			'Rue du terne',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue Frank',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue des anonymes',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue de la santée',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue des Chaufoures',
			'Rue Grand rue',
			'Rue de fer',
			'Rue de l\'ange',
			'Rue de ferrer',
			'Rue de Basse Montagne',
			'Chaussée de Dinant',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue du pargé',
			'Rue de Tongres',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue des anonymes',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue de la santée',
			'Rue mang',
			'Rue mang',	
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Rue John',
			'Rue John',
			'Rue John',
			'Rue des anonymes',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue des Champignon',
			'Rue de la santée',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue mang',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue homme',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue Jeanne',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue des Mésange',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue de Virton',
			'Rue des Chaufoures',
			'Rue Grand rue',
			'Rue de fer',
			'Rue de l\'ange',
			'Rue de ferrer',
			'Rue de Basse Montagne',
			'Chaussée de Dinant',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue de l\'Eglise',
			'Rue du pargé',
			'Rue de Tongres',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Launoy',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Rue Entrée Jacques',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			'Allée des Roses',
			);
$particularity_location = array(
	);
for($i = 1;$i < count($street)*1.5; $i++){

	for($b = 0; $b < count($particularity); $b++){

		$rand = rand(0,1);

		if($rand === 1 ){
			array_push($particularity_location,array(
				'location_id'=>$i,
				'particularity_id'=>$particularity[$b]
				));
		}
	}

}

		// Uncomment the below to run the seeder
		DB::table('location_particularity')->insert($particularity_location);
	}

}
