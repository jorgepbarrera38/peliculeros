<?php

use Illuminate\Database\Seeder;
use App\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $movie_name = 'Dead Pool 2';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sunt quisquam error, porro, doloribus ex iste molestiae quae tenetur aspernatur corrupti assumenda autem! Eius maiores error ex distinctio atque delectus.', 
            'duration' => '134', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/R0XK9FF3SMc?rel=0', 
            'size' => 2, 
            'format' => 'MKV', 
            'quality' => '1080P', 
            'urldownload' => 'http://www.google.com',
            'director_id' => 1, 
            'country_id' => 2, 
            'gender_id' => 1
        ]);
        $movie_name = 'Valerian';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/cPeqNTqZNN0?rel=0', 
            'size' => 4, 
            'format' => 'AVI', 
            'quality' => '1080P', 
            'urldownload' => 'http://www.google.com',
            'director_id' => 2, 
            'country_id' => 2, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/R0XK9FF3SMc?rel=0', 
            'size' => 4, 
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'http://www.google.com',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Dead Pool 1';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum sunt quisquam error, porro, doloribus ex iste molestiae quae tenetur aspernatur corrupti assumenda autem! Eius maiores error ex distinctio atque delectus.', 
            'duration' => '134', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/R0XK9FF3SMc?rel=0', 
            'size' => 2, 
            'format' => 'MKV', 
            'quality' => '1080P', 
            'urldownload' => 'http://www.google.com',
            'director_id' => 1, 
            'country_id' => 2, 
            'gender_id' => 1
        ]);
        $movie_name = 'Valerian 2';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/cPeqNTqZNN0?rel=0', 
            'size' => 4, 
            'format' => 'AVI', 
            'quality' => '1080P', 
            'urldownload' => 'http://www.google.com',
            'director_id' => 2, 
            'country_id' => 2, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 2';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 3';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 4';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 5';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 6';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 7';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 8';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 9';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 10';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 11';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 12';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 13';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
        $movie_name = 'Prometeus 14';
        Movie::create([
            'name' => $movie_name,
            'slug' => str_slug($movie_name),
            'image'=> '/images/movie/1.jpg',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi. Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi expedita eveniet quo hic aliquid officia iure exercitationem! Nemo amet a adipisci iusto necessitatibus? Laborum iusto inventore ad quo error commodi.', 
            'duration' => '142', 
            'launching' => Carbon\Carbon::now(), 
            'trailer' => 'https://www.youtube.com/embed/HHcHYisZFLU?rel=0', 
            'size' => 4,
            'format' => 'MP4', 
            'quality' => '720P', 
            'urldownload' => 'https://icutit.ca/Zrf8H0Xz35',
            'director_id' => 1, 
            'country_id' => 1, 
            'gender_id' => 2
        ]);
    }
}
