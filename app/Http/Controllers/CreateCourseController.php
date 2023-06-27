<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Post;
use Illuminate\Http\Request;

class CreateCourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $coursesShow = Course::All();
        $posts = Post::all();
        return view('newPosts.showPost', ['show' => $posts, 'showCourse' => $coursesShow]);
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request, $posts)
    {
        
        $ShowCategorie = Course::All();
        $ShowCategorieCoursesSelect = Post::All();

        $courses = Course::all()->groupBy('category_id');
        $categories = Post::select('CategorieName');

        
        return view('newPosts.create_course.createCourse',[
            'show' => [$posts], 
            'showCourse' => $ShowCategorie, 
            'showCategory' => $ShowCategorieCoursesSelect,
            'courses' => $courses, 
            'Categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'NameCourse' => 'required|max:60',
            'coursePrice' => 'required|numeric|min:0|max:9999',
            'descriptionCourse' => 'required|min:10',
            'featured' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);    

        $createCourses = new Course();
        $createCourses->NameCourse = $request->input('NameCourse');
        $createCourses->descriptionCourse = $request->input('descriptionCourse');
        $createCourses->coursePrice = $request->input('coursePrice');
        $createCourses->category_id = $request->input('category_id');

        if($request->hasFile('featuredCourse')){
            $file = $request->file('featuredCourse');
            $destinationPath = 'img/imgCreateCourse';
            $fileName = time() . '-' . $file->getClientOriginalName();
            $uploandSuccess = $request->file('featuredCourse')->move($destinationPath, $fileName);
            $createCourses ->featuredCourse = $destinationPath .'/'. $fileName;
        }
        $createCourses ->save();


        return redirect()->route('posts.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($post, $course)
    {

        $selectedPost = Post::find($post);
        $selectedCourse = Course::find($course);
    

        if (!$selectedPost || !$selectedCourse) {
            abort(404); 
        }
        
        $courses = Course::all();
        $categories = Post::all();
        
         return view('newPosts.create_course.courseContent', [
             'course' => $courses,
             'show' => $categories,
             'idCourse' => $course,
             'idCategory' => $post
         ]);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($post, $course)
    {
        $selectedPost = Post::find($post);
        $selectedCourse = Course::find($course);
    

        if (!$selectedPost || !$selectedCourse) {
            abort(404); 
        }
        
        $courses = Course::all();
        $categories = Post::all();
    

        return view('newPosts.create_course.editCourse',[
            'course' => $courses,
            'showCategory' => $categories,
            'idCourse' => $course,
            'idCategory' => $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $post, Course $course)
    {
        $course->NameCourse = $request->input('NameCourse');
        $course->descriptionCourse = $request->input('descriptionCourse');
        $course->coursePrice = $request->input('coursePrice');
        $course->category_id = $request->input('category_id');
    
        if ($request->hasFile('featuredCourse')) {
            $file = $request->file('featuredCourse');
            $destinationPath = 'img/imgCreateCourse';
            $fileName = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $file->move($destinationPath, $fileName);
            $course->featuredCourse = $destinationPath . '/' . $fileName;
    
            // Eliminar la imagen anterior si existe
            if (!empty($course->featuredCourse)) {
                // Obtener la ruta completa de la imagen
                $imagePath = public_path($course->getOriginal('featuredCourse'));
    
                // Verificar si el archivo existe y eliminarlo
                if (file_exists($imagePath)) {
                    unlink($imagePath);
                }
            }
        }
    
        $course->save();
        return redirect()->route('show.post', $post);
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy( $post, Course $course)
    {
        if (!empty($course-> featuredCourse)) {
            // Obtener la ruta completa de la imagen
            $imagePath = public_path($course-> featuredCourse);
            
            // Verificar si el archivo existe y eliminarlo
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $course->delete();   
        return to_route('show.post', $post);
    }
}
