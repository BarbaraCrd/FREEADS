<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Locations;
use Illuminate\Http\Request;

class CategoryController extends Controller
{


    public function women(Request $request)
    {
        $locations=Locations::all();
        $posts=Post::all()->where('category','Women\'s Fashion');


        if($request->get('locationsfilter'))
        {
            $checkedc = $_GET['locationsfilter'];

            if(count($_GET['locationsfilter'])==1)
            {
                $posts=Post::all()->where('category','Women\'s Fashion')->where('location', $checkedc[0]);
            }
            elseif(count($_GET['locationsfilter'])==2)
            {
            $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==3)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==4)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==5)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==6)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==7)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==8)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==9)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==10)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==11)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==12)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==13)
            {
                $posts=Post::where('category','Women\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11], $checkedc[12]])
                ->get();
            }

        }

        return view('category.women', ['posts'=>$posts, 'locations'=>$locations ]);
    }

    public function men(Request $request)
    {
        $locations=Locations::all();
        $posts=Post::all()->where('category','Men\'s Fashion');

        if($request->get('locationsfilter'))
        {
            $checkedc = $_GET['locationsfilter'];

            if(count($_GET['locationsfilter'])==1)
            {
                $posts=Post::all()->where('category','Men\'s Fashion')->where('location', $checkedc[0]);
            }
            elseif(count($_GET['locationsfilter'])==2)
            {
            $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==3)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==4)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==5)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==6)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==7)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==8)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==9)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==10)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==11)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==12)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==13)
            {
                $posts=Post::where('category','Men\'s Fashion')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11], $checkedc[12]])
                ->get();
            }

        }
        return view('category.men', ['posts'=>$posts, 'locations'=>$locations ] );
    }

    public function multi(Request $request)
    {
        $locations=Locations::all();
        $posts=Post::all()->where('category','Multimedia');

        if($request->get('locationsfilter'))
        {
            $checkedc = $_GET['locationsfilter'];

            if(count($_GET['locationsfilter'])==1)
            {
                $posts=Post::all()->where('category','Multimedia')->where('location', $checkedc[0]);
            }
            elseif(count($_GET['locationsfilter'])==2)
            {
            $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==3)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==4)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==5)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==6)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==7)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==8)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==9)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==10)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==11)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==12)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==13)
            {
                $posts=Post::where('category','Multimedia')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11], $checkedc[12]])
                ->get();
            }
        }

        return view('category.multi', ['posts'=>$posts, 'locations'=>$locations ] );
    }

    public function cars(Request $request)
    {
        $locations=Locations::all();
        $posts=Post::all()->where('category','Cars');

        if($request->get('locationsfilter'))
        {
            $checkedc = $_GET['locationsfilter'];

            if(count($_GET['locationsfilter'])==1)
            {
                $posts=Post::all()->where('category','Cars')->where('location', $checkedc[0]);
            }
            elseif(count($_GET['locationsfilter'])==2)
            {
            $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==3)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==4)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==5)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==6)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==7)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==8)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==9)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==10)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==11)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==12)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==13)
            {
                $posts=Post::where('category','Cars')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11], $checkedc[12]])
                ->get();
            }
        }
        return view('category.cars', ['posts'=>$posts, 'locations'=>$locations ] );
    }

    public function home_cat(Request $request)
    {
        $locations=Locations::all();
        $posts=Post::all()->where('category','Home');

        if($request->get('locationsfilter'))
        {
            $checkedc = $_GET['locationsfilter'];

            if(count($_GET['locationsfilter'])==1)
            {
                $posts=Post::all()->where('category','Home')->where('location', $checkedc[0]);
            }
            elseif(count($_GET['locationsfilter'])==2)
            {
            $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==3)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==4)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==5)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==6)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==7)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==8)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==9)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==10)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==11)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==12)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==13)
            {
                $posts=Post::where('category','Home')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11], $checkedc[12]])
                ->get();
            }
        }
        
        return view('category.home_cat', ['posts'=>$posts, 'locations'=>$locations ] );
    }

    public function real_estate(Request $request)
    {
        $locations=Locations::all();
        $posts=Post::all()->where('category','Real Estate');

        if($request->get('locationsfilter'))
        {
            $checkedc = $_GET['locationsfilter'];

            if(count($_GET['locationsfilter'])==1)
            {
                $posts=Post::all()->where('category','Real Estate')->where('location', $checkedc[0]);
            }
            elseif(count($_GET['locationsfilter'])==2)
            {
            $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==3)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==4)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==5)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==6)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==7)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==8)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==9)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==10)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==11)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==12)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11]])
                ->get();
            }
            elseif(count($_GET['locationsfilter'])==13)
            {
                $posts=Post::where('category','Real Estate')
                ->whereIn('location', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5], $checkedc[6], $checkedc[7], $checkedc[8], $checkedc[9], $checkedc[10], $checkedc[11], $checkedc[12]])
                ->get();
            }
        }

        return view('category.real_estate', ['posts'=>$posts, 'locations'=>$locations ] );
    }
}
