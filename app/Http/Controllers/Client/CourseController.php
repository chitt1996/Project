<?php

namespace App\Http\Controllers\Client;

use App\Repositories\Course\CourseRepositoryInterface;
use App\Repositories\Category\CategoryRepositoryInterface;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;
use App\Models\Subject;


class CourseController extends Controller
{
    protected $courseRepository;
    protected $categoryRepository;

    public function __construct(CourseRepositoryInterface $courseRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->courseRepository = $courseRepository;
        $this->categoryRepository = $categoryRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = $this->courseRepository->getCourseByTime();
        $categories = $this->categoryRepository->getParentCategory();

        return view('client.course.index', compact('courses', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $course = Course::find($id);
        $course = $this->courseRepository->find($id);
        // $course = Course::find($id)->with('subjects', 'users')->get();
        // dd($course);

        return view('client.course.course', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function history($id)
    {
        $subjects = $this->courseRepository->getSubjectByCourse($id);
        // $subjects->users()->get();
        // $tasks = $subjects->tasks()->get();
        // $task = $subject->tasks()->get();
        // dd($subjects);
        return view('client.history.subjects', compact('subjects'));
    }
}
