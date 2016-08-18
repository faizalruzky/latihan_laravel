<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Validator;
use Session;
use App\Http\Requests;
use App\Article;

class ArticlesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $articles = Article::all();
    return view('articles.index')
      ->with('articles', $articles);
      //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('articles.create');
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
        $img = Image::make(Input::file('/public/upload_images'));
        $validate = Validator::make($request->all(), Article::valid());
        if($validate->fails()) {
        return back()
        ->withErrors($validate)
        ->withInput();
  } else {
    Article::create($request->all());
    Session::flash('notice', 'Success add article');
    return Redirect::to('articles');
  }
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
        $article = Article::find($id);
        return view('articles.show')
        ->with('article', $article);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        return view('articles.edit')
        ->with('article', $article);
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
         $validate = Validator::make($request->all(), Article::valid($id));
        if($validate->fails()) {
        return back()
        ->withErrors($validate)
        ->withInput();
    } else {
        $article = Article::find($id);
        $article->update($request->all());
        Session::flash('notice', 'Success update article');
        return Redirect::to('articles');
    }
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
         $article = Article::find($id);
        if ($article->delete()) {
        Session::flash('notice', 'Article success delete');
        return Redirect::to('articles');
    } else {
        Session::flash('error', 'Article fails delete');
        return Redirect::to('articles');
    }
        //
    }
}
