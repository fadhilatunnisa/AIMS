<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class InventoriesTableSeeder extends Seeder {

	public function run()
	{
		$inventories = [
		['nama' => 'Kursi', 'jumlah' => '10', 'kondisi' => 'baik', 'status_kepemilikan' => 'Kantor', 'image' => 'img/1.jpg', 'keterangan' => 'blablablabla', 'created_at' => new DateTime, 'updated_at' => new DateTime],
		['nama' => 'Meja', 'jumlah' => '2', 'kondisi' => 'baik', 'status_kepemilikan' => 'Kantor', 'image' => 'img/2.jpg', 'keterangan' => 'blablablabla', 'created_at' => new DateTime, 'updated_at' => new DateTime]
		];

		DB::table('inventories')->insert($inventories);
	}

}