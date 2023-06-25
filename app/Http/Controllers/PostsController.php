<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\Category;
use App\Models\Info;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {

      
        // Take the categories to display on the interface
        $categories = Category::all();

        $categories_clean = array();
  
        foreach ($categories as $category) {
            array_push($categories_clean, $category->getAttributes());
        }

        $props['categories'] = $categories_clean;


        // define array to store post-categories
        $posts_ok = array();

        // Take all the posts
        $posts = Post::all();

        if (count($posts) != 0){

            // Filter posts
            foreach ($categories_clean as $category) {
            
                // Check trough all the posts
                foreach ($posts as $p => $post) {
                    $posts_ok[$post->id] = $post->getAttributes();

                    // Check for the categories
                    $posts_analysis = $post->categories()->orderBy('title')->get();
                   
                    // If a category is present in the active categories list...
                    foreach ($posts_analysis as $post_analysed) {
                        $posts_ok[$post->id]['categories'][] = $post_analysed->title;
                    }
                  
                }


               

              
                // ... send to view
                $props['posts'] = $posts_ok;
                return view('app', $props);
            }

        }

        else {
            return view('app');
        }
    }      

    public function info(){
        $infos = Info::all();
        $props['infos'] = $infos;
        // dd($info );

        return view('info', $props);
    }

    public function program(){
        $posts = Post::all();
        $categories = Category::all();
        $posts_ok= array();
        $categories_clean = array();
  
        foreach ($categories as $category) {
            array_push($categories_clean, $category->getAttributes());
        }

        // Filter posts
        foreach ($categories_clean as $category) {
            
            // Check trough all the posts
            foreach ($posts as $p => $post) {
                $posts_ok[$post->id] = $post->getAttributes();

                // Check for the categories
                $posts_analysis = $post->categories()->orderBy('title')->get();
               
                // If a category is present in the active categories list...
                foreach ($posts_analysis as $k => $post_analysed) {
                    $posts_ok[$post->id]['categories'][$k]['title'] = $post_analysed->title;
                    $posts_ok[$post->id]['categories'][$k]['color'] = $post_analysed->color;
                }
              
            }

        }

        $filtered_posts = array();
        foreach ($posts_ok as $key => $post) {
            $filtered_posts[$post['calendario']][ $post['quando']][] = $post;
        }

        $props['categories'] = $categories_clean;
        $props['posts'] = $filtered_posts;


        return view('programma', $props);
    }
}