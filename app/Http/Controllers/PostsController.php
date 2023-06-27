<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $posts = Post::All();
        $postCount = Post::count();


        return view('newPosts.index' ,compact('postCount') , ['posts' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('newPosts.createPost');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = new Post();
        $newPost->CategorieName = $request->input('CategorieName');
        $newPost->flexRadioDefault = $request->input('flexRadioDefault');
        
        // Obtener el ID del curso seleccionado
        $courseId = $request->input('course_id');
        $newPost->course_id = $courseId;
    
        if ($request->hasFile('featured')) {
            $file = $request->file('featured');
            $destinationPath = 'img/imgPosts';
            $fileName = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $fileName);
            $newPost->featured = $destinationPath . '/' . $fileName;
        }
    
        $newPost->save();
    
        return redirect()->route('posts.index');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,  Post $posts)
    {
    
        $categoryName = $request->input('name');

        $ShowCategorie = Course::All();
        $ShowCategorieCoursesSelect = Post::All();

        $courses = Course::all()->groupBy('category_id');
        $categories = Post::select('CategorieName');

        
        return view('newPosts.showPost',[
            'show' => [$posts], 
            'showCourse' => $ShowCategorie, 
            'showSelect' => $ShowCategorieCoursesSelect,
            'courses' => $courses, 
            'Categories' => $categories,
            'categoryName' => $categoryName,
        ]);
    }
    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $posts)
    {
        return view('newPosts/editPost',['show' => [$posts]]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $posts)
    {
        $request->validate([
            'CategorieName' => 'required|max:30',
            'flexRadioDefault' => 'required',
            'featured' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);    

        $posts->CategorieName = $request->input('CategorieName');
        $posts->flexRadioDefault = $request->input('flexRadioDefault');
    
        if ($request->hasFile('featured')) {
            $file = $request->file('featured');
            $destinationPath = 'img/imgPosts';
            $fileName = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('featured')->move($destinationPath, $fileName);
    
            // Eliminar la imagen anterior si existe
            if (!empty($posts->featured)) {
                $imagePath = public_path($posts->featured);
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
    
            $posts->featured = $destinationPath . '/' . $fileName;
        }
    
        $posts->save();
        return redirect()->route('posts.index', $posts);

    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $posts)
    {
        // Eliminar la imagen si existe
        if (!empty($posts->featured)) {
        // Obtener la ruta completa de la imagen
        $imagePath = public_path($posts->featured);
        
        // Verificar si el archivo existe y eliminarlo
        if (file_exists($imagePath)) {
            unlink($imagePath);
        }
    }

        $posts->delete();   
        return redirect()->route('posts.index', $posts);
    }
}
