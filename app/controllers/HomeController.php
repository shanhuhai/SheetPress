<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

    public function index(){
        $articles = Article::where('user_id',1)->orderBy('created_at','desc')->paginate(5);
        return View::make('home.index')->with('articles', $articles);
    }

	public function article($id)
	{
        $article = Article::find($id);
        $articles = Article::where('user_id',1)->select(['id','title'])->limit(5)->orderBy('created_at','desc')->get();
		return View::make('home.article')->with(array(
            'article'=>$article,
            'articles'=>$articles
        ));
	}

    public function about(){
        return View::make('home.about');
    }

}
