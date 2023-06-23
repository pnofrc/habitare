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
        // dd($categories);

        $categories_clean = array();
  
        foreach ($categories as $category) {
            array_push($categories_clean, $category->title);
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
                    // print_r($post->categories()->orderBy('title')->get());
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
}
