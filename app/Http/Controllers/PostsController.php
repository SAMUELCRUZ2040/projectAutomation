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
        $newPost->descriptionCategory = $request->input('descriptionCategory');
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
            'descriptionCategory' => 'required',
            'flexRadioDefault' => 'required',
            'featured' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);    

        $posts->CategorieName = $request->input('CategorieName');
        $posts->descriptionCategory = $request->input('descriptionCategory');
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
        
        $categorieName = $request->input('CategorieName');
        $Fields_valueCourse = Course::all();
        $Fields_valuePost = Post::all();
        echo $posts->id;
        
        foreach ($Fields_valuePost as $postValue) {
            if ($posts->id == $postValue->id) {
                echo $postValue->CategorieName;
                foreach ($Fields_valueCourse as $course) {
                    if ($postValue->CategorieName === $course->category_id) {
                        
                        $modifyCourse = Course::where('category_id', $course->category_id)->first();
        
                        $modifyCourse->NameCourse = $course->NameCourse;
                        $modifyCourse->descriptionCourse = $course->descriptionCourse;
                        $modifyCourse->coursePrice = $course->coursePrice;
                        $modifyCourse->category_id = $categorieName;
                        $modifyCourse->featuredCourse = $course->featuredCourse;
        
                        $modifyCourse->save();
                    }
                }
            }
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
/*

    
            
                
             foreach ($Fields_valueCourse as $course) {
                var_dump($course -> category_id);
                if($posts -> CategorieName ==  $course -> category_id){
                    echo "verdader";
                }
                else{
                    echo "falso";
                }
                //  if ($course->category_id == $posts -> CategorieName) {
                //      echo $course->NameCourse;
                //      // Realiza las modificaciones necesarias en el modelo $course
                //      // $course->NameCourse = ...
                //      // $course->descriptionCourse = ...
                //      // $course->coursePrice = ...
                //      // $course->category_id = ...
                //      // $course->featuredCourse = ...
                //      // $course->save();
                //  } else {
                //      echo "no se cumple";
                //  }
             }

            
            
            
            //  $posts->save();
    
            
            // return redirect()->route('posts.index', $posts);
*/