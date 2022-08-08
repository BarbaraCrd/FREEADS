<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Message;
use App\Models\Locations;
use App\Models\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {  
        $user=User::find(auth()->user()->id);
        $data = Post::latest()->where('user_id', $user['id'])->paginate(6);

        return view('posts.index',compact('data'))
                ->with('id', (request()->input('page', 1) - 1) * 5);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Categories::get();
        $locations= Locations::get();
        return view('posts.create', ['categories'=> $categories, 'locations'=> $locations]);
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
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'location' => 'required',
            'picture' => 'required|mimes:jpeg,png,jpg',
            'picture2' => 'mimes:jpeg,png,jpg',
        ]);

        if(isset($request->picture) && isset($request->picture2) )
        {
        $pictureName=uniqid(). "." . $request->picture->extension();
        $request->picture->move(public_path('imagesposts'), $pictureName );
        $pictureName2=uniqid(). "." . $request->picture2->extension();
        $request->picture2->move(public_path('imagesposts'), $pictureName2 );

        Post::create([
            'title' => $request->title,
            'category' =>$request->category,
            'description' =>$request->description,
            'price' => $request->price,
            'location' =>$request->location,
            'picture' =>$pictureName,
            'picture2' =>$pictureName2,
            'user_id' => auth()->user()->id
        ]);
        }

        elseif(isset($request->picture) && empty($request->picture2))
        {
            $pictureName=uniqid(). "." . $request->picture->extension();
            $request->picture->move(public_path('imagesposts'), $pictureName );
            Post::create([
                'title' => $request->title,
                'category' =>$request->category,
                'description' =>$request->description,
                'price' => $request->price,
                'location' =>$request->location,
                'picture' =>$pictureName,
                'picture2' =>null,
                'user_id' => auth()->user()->id
            ]);
        }

        return redirect()->route('posts.index')
                        ->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post, Request $request)
    {
        $user_id=$request["user_id"];
       
        if(Auth::check())
        {
            $user=User::find(auth()->user()->id);
            return view('posts.show',compact('post', 'user'));
        }
        if(!Auth::check())
        {
             return view('posts.show',compact('post'));
        }
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function see(Post $post)
    {
        return view('see',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories= Categories::get();
        $locations= Locations::get();
        return view('posts.edit',compact('post'), ['categories'=> $categories,'locations'=> $locations]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'title' => 'required',
            'category' => 'required',
            'description' => 'required',
            'price' => 'required',
            'location' => 'required',
        ]);
    
        if(isset($request->picture) && isset($request->picture2) )
        {
        $pictureName=uniqid(). "." . $request->picture->extension();
        $request->picture->move(public_path('imagesposts'), $pictureName );
        $pictureName2=uniqid(). "." . $request->picture2->extension();
        $request->picture2->move(public_path('imagesposts'), $pictureName2 );

        $post->update([
            'title' => $request->title,
            'category' =>$request->category,
            'description' =>$request->description,
            'price' => $request->price,
            'location' =>$request->location,
            'picture' =>$pictureName,
            'picture2' =>$pictureName2
        ]);

        }

        elseif(isset($request->picture))
        {
            $pictureName=uniqid(). "." . $request->picture->extension();
            $request->picture->move(public_path('imagesposts'), $pictureName );

            $post->update([
                'title' => $request->title,
                'category' =>$request->category,
                'description' =>$request->description,
                'price' => $request->price,
                'location' =>$request->location,
                'picture' =>$pictureName,
            ]);

        }

        elseif(isset($request->picture2))
        {
            $pictureName2=uniqid(). "." . $request->picture2->extension();
            $request->picture2->move(public_path('imagesposts'), $pictureName2 );

            $post->update([
                'title' => $request->title,
                'category' => $request->category,
                'description' => $request->description,
                'price' => $request->price,
                'location' => $request->location,
                'picture2' => $pictureName2,
            ]);

        }

        else {
            $post->update([
                'title' => $request->title,
                'category' => $request->category,
                'description' => $request->description,
                'price' => $request->price,
                'location' => $request->location,
    
            ]);
        };
    
    
        return redirect()->route('posts.index')
                        ->with('success','Post updated successfully');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */

    public function destroy(Post $post)
    { 
       // dd($post->id);
        $post->delete();

        return redirect()->route('posts.index')
                         ->with('success','Post '.$post->title.' deleted successfully');
    }


    public function search()
    {
        request()->validate([
            'search' => 'required|min:3'
        ]);

        $search = request()->input('search');

       $data = Post::where('title', 'like', '%'.$search.'%')
                ->paginate(5);
        
        return view('posts.search')->with('data', $data);
    }
    public function searchglobal(Request $request)
    {

        $categories=Categories::all();
        $locations=Locations::all();
        $search = request()->input('search');

        if ($request->get('categoriesfilter') && $request->get('locationsfilter') && (empty($search)))
        {

            $checkedc = $_GET['categoriesfilter'];
            $checkedl = $_GET['locationsfilter'];

            if(count($_GET['categoriesfilter'])==6 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==5 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==4 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==3 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==2 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                            ->whereIn('category', [$checkedc[0], $checkedc[1]])->get();
            }
            elseif(count($_GET['locationsfilter'])==1 && count($_GET['categoriesfilter'])==1)
            {
                $data=Post::all()->where('location', $checkedl[0])->where('category', $checkedc[0]);
            }
            elseif(count($_GET['locationsfilter'])==2 && count($_GET['categoriesfilter'])==1)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])->where('category', $checkedc[0])->get();
            }
            elseif(count($_GET['locationsfilter'])==2 && count($_GET['categoriesfilter'])==2)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1]])->get();
            }
            elseif(count($_GET['locationsfilter'])==2 && count($_GET['categoriesfilter'])==3)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2]])->get();
            }
            elseif(count($_GET['locationsfilter'])==2 && count($_GET['categoriesfilter'])==4)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3]])->get();
            }
            elseif(count($_GET['locationsfilter'])==2 && count($_GET['categoriesfilter'])==5)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])->get();
            }
            elseif(count($_GET['locationsfilter'])==2 && count($_GET['categoriesfilter'])==6)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])->get();
            }
            elseif(count($_GET['locationsfilter'])==3 && count($_GET['categoriesfilter'])==1)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2] ])->where('category', $checkedc[0])->get();
            }
            elseif(count($_GET['locationsfilter'])==3 && count($_GET['categoriesfilter'])==2)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1]])->get();
            }
            elseif(count($_GET['locationsfilter'])==3 && count($_GET['categoriesfilter'])==3)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2]])->get();
            }
            elseif(count($_GET['locationsfilter'])==3 && count($_GET['categoriesfilter'])==4)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3]])->get();
            }
            elseif(count($_GET['locationsfilter'])==3 && count($_GET['categoriesfilter'])==5)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])->get();
            }
            elseif(count($_GET['locationsfilter'])==3 && count($_GET['categoriesfilter'])==6)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                        ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])->get();
            }
            return view('searchglobal', ['locations'=>$locations, 'categories'=>$categories])->with('data', $data);
        }
        
        elseif ($request->get('categoriesfilter') && $request->get('locationsfilter') && (isset($search)))
        {

            $checkedc = $_GET['categoriesfilter'];
            $checkedl = $_GET['locationsfilter'];

            if(count($_GET['locationsfilter'])==1 && count($_GET['categoriesfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==2 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==3 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==4 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==5 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==6 && count($_GET['locationsfilter'])==1)
            {
                $data=Post::where('location', $checkedl[0])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==1 && count($_GET['locationsfilter'])==2)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->where('category', $checkedc[0])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==2 && count($_GET['locationsfilter'])==2)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==3 && count($_GET['locationsfilter'])==2)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==4 && count($_GET['locationsfilter'])==2)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==5 && count($_GET['locationsfilter'])==2)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==6 && count($_GET['locationsfilter'])==2)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==1 && count($_GET['locationsfilter'])==3)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->where('category', $checkedc[0])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==2 && count($_GET['locationsfilter'])==3)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==3 && count($_GET['locationsfilter'])==3)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==4 && count($_GET['locationsfilter'])==3)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==5 && count($_GET['locationsfilter'])==3)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])->get();            
            }
            elseif(count($_GET['categoriesfilter'])==6 && count($_GET['locationsfilter'])==3)
            {
                $data=Post::whereIn('location', [$checkedl[0], $checkedl[1], $checkedl[2]])
                            ->where('title', 'like', '%'. $search .'%')
                            ->whereIn('category', [$checkedc[0], $checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])->get();            
            }

            return view('searchglobal', ['locations'=>$locations, 'categories'=>$categories])->with('data', $data);
        }

        elseif($request->get('locationsfilter') && empty($search))

        {
            $checkedl = $_GET['locationsfilter'];

            if(count($_GET['locationsfilter'])==1)
            {
                $data=Post::all()->where('location', $checkedl[0]);
            }
            elseif(count($_GET['locationsfilter'])==2)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1]]);
            }
            elseif(count($_GET['locationsfilter'])==3)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2]]);
            }
            elseif(count($_GET['locationsfilter'])==4)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]]);
            }
            elseif(count($_GET['locationsfilter'])==5)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]]);
            }
            elseif(count($_GET['locationsfilter'])==6)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]]);
            }
            elseif(count($_GET['locationsfilter'])==7)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6]]);
            }
            elseif(count($_GET['locationsfilter'])==8)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7]]);
            }
            elseif(count($_GET['locationsfilter'])==9)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8]]);
            }
            elseif(count($_GET['locationsfilter'])==10)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8], $checkedl[9]]);
            }
            elseif(count($_GET['locationsfilter'])==11)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8], $checkedl[9], $checkedl[10]]);
            }
            elseif(count($_GET['locationsfilter'])==12)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8], $checkedl[9], $checkedl[10], $checkedl[11]]);
            }
            elseif(count($_GET['locationsfilter'])==13)
            {
                $data=Post::all()->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8], $checkedl[9], $checkedl[10], $checkedl[11], $checkedl[12]]);
            }

            return view('searchglobal', ['locations'=>$locations, 'categories'=>$categories])->with('data', $data);

        }

        elseif ($request->get('categoriesfilter') && empty($search))
        {
            $checkedc = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $data=Post::all()->where('category', $checkedc[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $data=Post::all()->whereIn('category', [$checkedc[0],$checkedc[1]]);
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $data=Post::all()->whereIn('category', [$checkedc[0],$checkedc[1], $checkedc[2]]);
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $data=Post::all()->whereIn('category', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3]]);
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $data=Post::all()->whereIn('category', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]]);
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $data=Post::all()->whereIn('category', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]]);
            }
            return view('searchglobal', ['locations'=>$locations, 'categories'=>$categories])->with('data', $data);
        }

        elseif($request->get('locationsfilter') && isset($search))
        {
            $checkedl = $_GET['locationsfilter'];
            $search = strtolower($_GET['search']);

            if(count($_GET['locationsfilter'])==1)
            {
                $data = Post::where('title', 'like', '%'. $search .'%')->where('location', $checkedl[0])->get();
            }
            elseif(count($_GET['locationsfilter'])==2)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1]])->get();
            }
            elseif(count($_GET['locationsfilter'])==3)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2]])->get();
            }
            elseif(count($_GET['locationsfilter'])==4)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])->get();
            }
            elseif(count($_GET['locationsfilter'])==5)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])->get();
            }
            elseif(count($_GET['locationsfilter'])==6)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])->get();
            }
            elseif(count($_GET['locationsfilter'])==7)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6]])->get();
            }
            elseif(count($_GET['locationsfilter'])==8)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7]])->get();
            }
            elseif(count($_GET['locationsfilter'])==9)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8]])->get();
            }
            elseif(count($_GET['locationsfilter'])==10)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8], $checkedl[9]])->get();
            }
            elseif(count($_GET['locationsfilter'])==11)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8], $checkedl[9], $checkedl[10]])->get();
            }
            elseif(count($_GET['locationsfilter'])==12)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8], $checkedl[9], $checkedl[10], $checkedl[11]])->get();
            }
            elseif(count($_GET['locationsfilter'])==13)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('location', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5], $checkedl[6], $checkedl[7], $checkedl[8], $checkedl[9], $checkedl[10], $checkedl[11], $checkedl[12]])->get();
            }

            return view('searchglobal', ['locations'=>$locations, 'categories'=>$categories, 'data'=>$data]);

        }

        elseif ($request->get('categoriesfilter') && isset($search))
        {
            $checkedc = $_GET['categoriesfilter'];
            $search = strtolower($_GET['search']);

            if(count($_GET['categoriesfilter'])==1)
            {
                $data = Post::where('title', 'like', '%'. $search .'%')->where('category', $checkedc[0])->get();
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('category', [$checkedc[0],$checkedc[1]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('category', [$checkedc[0],$checkedc[1], $checkedc[2]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('category', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('category', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4]])->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $data=Post::where('title', 'like', '%'. $search .'%')->whereIn('category', [$checkedc[0],$checkedc[1], $checkedc[2], $checkedc[3], $checkedc[4], $checkedc[5]])->get();
            }
            return view('searchglobal', ['locations'=>$locations, 'categories'=>$categories, 'data'=>$data]);
        }

        $data = Post::where('title', 'like', '%'.$search.'%')
                ->paginate(20);

        return view('searchglobal', ['locations'=>$locations, 'categories'=>$categories ] )->with('data', $data);
    }
    public function read()
    {
            $user = auth()->user()->id;
            $messages = Message::latest()->where('seller_id', '=', auth()->user()->id)->get();
    
            
        return view('read', compact('messages'));
    }

    public function readA()
    {
            $user = auth()->user()->id;
            $messages = Message::latest()->where('buyer_id', '=', auth()->user()->id)->get();
    
        return view('readA', compact('messages'));
    }

    public function readglobal(Post $post)
    {
        return view('readglobal', compact('post'));
    }



}