<?php

namespace App\Http\Controllers;
use App\Models\Post;
use App\Models\PostFromInterface;
use App\Models\Category;
use App\Models\Info;
use Illuminate\Http\Request;
use App\Mail\acceptPost;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PostsController extends Controller
{


    public function postFromInterface(Request $request){
     
        

        if ($request->hasFile('file')) {
            // $this->validate($request, [
            //     'image' => 'required|image|mimes:jpg,jpeg,png,gif,svg|max:2048'
            // ]);
    
            // $image = $request->file('file');

            // $image_name = time().'_'. $image;

            // $path = public_path('/')  . $image_name;
            // // $path =$image;
    
            // $file = Image::make($image->getRealPath())->resize(150, 150)->save($path);
            
            // $file=$file->filename;

            $image = $request->file('file')->store('/');

            $file = Image::make('storage/' . $image)->resize(150, 150);

            $file->save('storage/' . $image);

            dd($image);
           
        } else {
            $file = 'null';
        }

    


        $newPost = PostFromInterface::create([
			'name' => $request->name,
			'post' =>  $request->post, // used to check if the order has been updated
            'file' => $image,
            'category' => $request->category,
			'lat' =>  $request->lat,
			'lng' =>  $request->lng, // quella per il codice
			'published' => false, // quella visualizzata nel front
		]);

        $newPost->save();
 

        Mail::to("habitare@habitattt.it")
            ->send(new acceptPost($newPost->id,$request->name,$request->post,$file));


        return view('grazie');
    }

    public function acceptPost($id) {

        $post = PostFromInterface::findOrFail($id);
        $post->published = !$post->published;
        $post->save();

        return 'Postato!';

    }

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
        $posts = $posts->sortBy('orario');
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
            $filtered_posts[$post['calendario']][$post['quando']][] = $post;
            // $filtered_posts[$post['calendario']][$post['orario']][] = $post;
        }

        // $props['categories'] = $categories_clean;
        $props['posts'] = $filtered_posts;
        // dd($filtered_posts);

        return view('programma', $props);
    }

    public function posts(){
        // POSTS FROM USERS
        $postsFromUsers = PostFromInterface::all();
        // ... send to view
        $props['postsFromUsers'] = $postsFromUsers;

        return view('piadagram', $props);
    }


}