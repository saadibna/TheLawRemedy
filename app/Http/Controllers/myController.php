<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin\AppointmentForm;
use App\admin\BlogForm;
use App\admin\CaseForm;
use App\admin\CategoryForm;
use App\admin\LawyerForm;
use App\admin\ServiceForm;
use App\admin\TestimonialsForm;

class myController extends Controller
{
    public function about(){
        return view('about');
    }
    public function service(){
        $service=ServiceForm::orderBy('id','desc')->paginate(8);
        //dd($service);
        return view('service',compact('service'));
    }
    public function case(){
        $case=CaseForm::get();
        return view('caseStudy',compact('case'));
    }
    public function blog(){
        $blog=BlogForm::get();
        return view('blog',compact('blog'));
    }
    public function contact(){
        return view('contact');
    }
    public function catagory(){
        return view('catagory');
    }
    public function attorney(){
        $lawyer=LawyerForm::orderBy('id','desc')->paginate(8);
        return view('attorney', compact('lawyer'));
    }
    public function appointment(){
        $appointment=AppointmentForm::get();
        return view('appointment', compact('appointment'));
    }
    public function index(){
        $service=ServiceForm::orderBy('id','desc')->paginate(8);
        $blog=BlogForm::get();
        $testimonials=TestimonialsForm::get();
        $lawyer=LawyerForm::orderBy('id','desc')->paginate(7);
        return view('index',compact('service','blog','testimonials','lawyer'));
    }
	public function serviceauto(){
        $service=ServiceForm::get();
        return view('single-service', compact('service'));
    }
}
