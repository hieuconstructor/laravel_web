<?php

namespace App\Http\Controllers;

use App\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $data = Course::query()->get();
        return view('course.index', [
            'data'=> $data,
        ]);
    }


    public function create()
    {
        return  view('course.create');
        //
    }


    public function store(Request $request)
    {
        $object = new Course();
        $object->fill($request->except('_token'));
        $object->save();

        return redirect()->route('course.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(Course $course)
    {
        //
    }


    public function edit(Course $course)
    {
        return view('course.edit', [
            'each'=> $course,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Course $course)
    {
//        Course::where('id', $course -> id) -> update(
//            $request->except([
//                '_token',
//                '_method',
//            ])
//        );
        $course -> update(
            $request->except([
                '_token',
                '_method',
            ])
        );

        return redirect()->route('course.index');
    }


    public function destroy(Course $course)
    {
        $course->delete();

        return redirect()->route('course.index');
        //Course::destroy($course->id);
        //Course::where('id', $course->id) -> delete();
    }
}
