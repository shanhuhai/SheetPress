<?php

// Composer: "fzaninotto/faker": "v1.3.0"

class ArticleTableSeeder extends Seeder {

	public function run() {
		Article::create([
			'title' => "First Blood!",
			'body' => "All start From here",
			'user_id' => 1,
		]);
	}

}