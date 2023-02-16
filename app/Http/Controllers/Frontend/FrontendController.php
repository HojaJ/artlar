<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Modules\Artist\Models\Artist;
use Modules\Work\Models\Work;

class FrontendController extends Controller
{

    public function index()
    {
        $latest_works = Work::latest()->with('artist')->take(5)->get();
        $artists = Artist::latest()->take(5)->get();
        return view('frontend.index', compact('latest_works', 'artists'));
    }


    public function artists()
    {
        $body_class = '';

        return view('frontend.artists', compact('body_class'));
    }

    public function artist()
    {
        $body_class = '';

        return view('frontend.artist', compact('body_class'));
    }

    public function works()
    {
        $body_class = '';

        return view('frontend.works', compact('body_class'));
    }
    public function work()
    {
        $body_class = '';

        return view('frontend.work', compact('body_class'));
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
        $body_class = '';

        return view('frontend.in_the_news', compact('body_class'));
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

    public function arrivals()
    {
        $body_class = '';

        return view('frontend.arrivals', compact('body_class'));
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
}
