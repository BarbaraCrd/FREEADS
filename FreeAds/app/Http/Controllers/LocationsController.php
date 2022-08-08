<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Categories;
use Illuminate\Http\Request;

class LocationsController extends Controller
{
    public function auvergne_rhone_alpes(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Auvergne-Rhône-Alpes');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Auvergne-Rhône-Alpes')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Auvergne-Rhône-Alpes')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Auvergne-Rhône-Alpes')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Auvergne-Rhône-Alpes')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Auvergne-Rhône-Alpes')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Auvergne-Rhône-Alpes')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.auvergne_rhone_alpes', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function bourgogne_franche_comte(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Bourgogne-Franche-Comté');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Bourgogne-Franche-Comté')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Bourgogne-Franche-Comté')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Bourgogne-Franche-Comté')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Bourgogne-Franche-Comté')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Bourgogne-Franche-Comté')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Bourgogne-Franche-Comté')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.bourgogne_franche_comte', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function bretagne(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Bretagne');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Bretagne')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Bretagne')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Bretagne')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Bretagne')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Bretagne')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Bretagne')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.bretagne', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function centre_val_de_loire(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Centre-Val de Loire');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Centre-Val de Loire')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Centre-Val de Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Centre-Val de Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Centre-Val de Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Centre-Val de Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Centre-Val de Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.centre_val_de_loire', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function corse(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Corse');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Corse')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Corse')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Corse')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Corse')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Corse')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Corse')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.corse', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function grand_est(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Grand Est');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Grand Est')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Grand Est')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Grand Est')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Grand Est')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Grand Est')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Grand Est')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.grand_est', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function hauts_de_france(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Hauts-de-France');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Hauts-de-France')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Hauts-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Hauts-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Hauts-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Hauts-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Hauts-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.hauts_de_france', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function île_de_france(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Île-de-France');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Île-de-France')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Île-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Île-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Île-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Île-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Île-de-France')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.île_de_france', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function normandie(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Normandie');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Normandie')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Normandie')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Normandie')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Normandie')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Normandie')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Normandie')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.normandie', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function nouvelle_aquitaine(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Nouvelle-Aquitaine');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Nouvelle-Aquitaine')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Nouvelle-Aquitaine')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Nouvelle-Aquitaine')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Nouvelle-Aquitaine')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Nouvelle-Aquitaine')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Nouvelle-Aquitaine')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.nouvelle_aquitaine', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function occitanie(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Occitanie');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Occitanie')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Occitanie')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Occitanie')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Occitanie')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Occitanie')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Occitanie')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.occitanie', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function pays_de_loire(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Pays-de-Loire');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Pays-de-Loire')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Pays-de-Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Pays-de-Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Pays-de-Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Pays-de-Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Pays-de-Loire')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.pays_de_loire', ['posts'=>$posts, 'categories'=>$categories ] );
    }

    public function provence_alpes_cote_azur(Request $request)
    {
        $categories=Categories::all();
        $posts=Post::all()->where('location','Provence-Alpes-Côte d\'Azur');

        if($request->get('categoriesfilter'))
        {
            $checkedl = $_GET['categoriesfilter'];

            if(count($_GET['categoriesfilter'])==1)
            {
                $posts=Post::all()->where('location','Provence-Alpes-Côte d\'Azur')->where('category', $checkedl[0]);
            }
            elseif(count($_GET['categoriesfilter'])==2)
            {
                $posts=Post::where('location','Provence-Alpes-Côte d\'Azur')
                ->whereIn('category', [$checkedl[0],$checkedl[1]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==3)
            {
                $posts=Post::where('location','Provence-Alpes-Côte d\'Azur')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==4)
            {
                $posts=Post::where('location','Provence-Alpes-Côte d\'Azur')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==5)
            {
                $posts=Post::where('location','Provence-Alpes-Côte d\'Azur')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4]])
                ->get();
            }
            elseif(count($_GET['categoriesfilter'])==6)
            {
                $posts=Post::where('location','Provence-Alpes-Côte d\'Azur')
                ->whereIn('category', [$checkedl[0],$checkedl[1], $checkedl[2], $checkedl[3], $checkedl[4], $checkedl[5]])
                ->get();
            }

        }

        return view('locations.provence_alpes_cote_azur', ['posts'=>$posts, 'categories'=>$categories ] );
    }
}
