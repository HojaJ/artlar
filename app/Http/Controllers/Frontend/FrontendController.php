<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Modules\Artist\Models\Artist;
use Modules\Innews\Models\Innews;
use Modules\Work\Models\Work;

class FrontendController extends Controller
{

    public function index()
    {
        $array = json_decode(setting('slide'), true);
        $selected_works = collect();
        foreach ($array as $key => $value){
            $selected_works->push(Work::where('id', $value)->first());
        }
        $latest_works = Work::latest()->with('artist')->take(5)->get();
        $artists = Artist::latest()->take(5)->get();
        return view('frontend.index', compact('latest_works', 'artists','selected_works'));
    }

    public function artists()
    {
        $body_class = '';
        $artists = Artist::orderBy('name')->get();
        return view('frontend.artists',compact('artists'));
    }

    public function artist(Request $request, $id)
    {
        $artists = Artist::orderBy('name')->get();
        $artist= Artist::findOrFail($id);
        return view('frontend.artist', compact('artist', 'artists'));
    }

    public function works(Request $request)
    {
        $all_artist = Artist::select('id', 'name', 'surname')->get();

        $query = Work::query();
        if($request->artists){
            $query->whereIn('artist_id',json_decode($request->artists));
        }

        $works = $query->latest()->with('artist')->paginate(12);
        if ($request->ajax()) {
            if ($request->get('artists')){
                $view = view('frontend.work_load', compact('works'))->render();
            }else{
                $view = view('frontend.work_load', compact('works'))->render();
                return response()->json(['html' => $view]);
            }
        }

        return view('frontend.works', compact('works','all_artist'));
    }

    public function work(Request $request, $id)
    {
        $work = Work::findOrFail($id);
        $latest_works = Work::latest()->where('artist_id', $work->artist->id)->take(5)->get();

        return view('frontend.work', compact('work','latest_works'));
    }

    public function about()
    {
        $body_class = '';

        return view('frontend.about', compact('body_class'));
    }

    public function contact()
    {
        $body_class = '';

        return view('frontend.contact', compact('body_class'));
    }

    public function in_the_news()
    {
        $innews = Innews::latest()->paginate(12);
        return view('frontend.in_the_news', compact('innews'));
    }

    public function news()
    {
        $body_class = '';

        return view('frontend.news', compact('body_class'));
    }

    public function faq()
    {
        $body_class = '';

        return view('frontend.faq', compact('body_class'));
    }

    public function wishlist()
    {
        $body_class = '';

        return view('frontend.wishlist', compact('body_class'));
    }

    public function arrivals(Request $request)
    {
        $works = Work::latest()->with('artist')->paginate(12);
        if ($request->ajax()) {
            $view = view('frontend.work_load', compact('works'))->render();
            return response()->json(['html' => $view]);
        }
        return view('frontend.arrivals', compact('works'));
    }


    /**
     * Privacy Policy Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function privacy()
    {
        $body_class = '';

        return view('frontend.privacy', compact('body_class'));
    }

    /**
     * Terms & Conditions Page.
     *
     * @return \Illuminate\Http\Response
     */
    public function terms()
    {
        $body_class = '';

        return view('frontend.terms', compact('body_class'));
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output = '';
            $query = $request->get('query');
            if($query != '')
            {
                $data = Work::where('name', 'like', '%'.$query.'%')
                    ->orwhereHas('artist', function($q) use ($query){
                        $q->where('name', 'like', '%'.$query.'%')
                            ->orWhere('surname', 'like', '%'.$query.'%');
                    })
                    ->orderBy('name')->get();
            }
            if(isset($data))
            {
                $output = '<ul>';
                foreach($data as $row)
                {
                    $output .= '
                <li><a class="link-primary" href="'. route('frontend.artist',$row->artist->id )  .'">'. $row->artist->full_name .'</a> > <a class="link-primary" href="'. route('frontend.work',$row->id )  .'">'. $row->name .'</a></li> 
                ';
                }
                $output .= '</ul>';
            }
            else
            {
                $output = '<li>Nothing found</li>';
            }
            $data = array(
                'data'  => $output,
            );
            echo json_encode($data);
        }
    }
}
