<?php

namespace App\Controllers\Admin;
 
use Article;
use Input, Notification, Redirect, Sentry, Str;

use App\Services\Validators\PageValidator;

class ArticlesController extends \BaseController {
 
    public function index()
    {
        return \View::make('admin.articles.index')->with('articles', Article::all());
    }

    public function show($id)
    {
        return \View::make('admin.articles.show')->with('page', Article::find($id))->withAuthor(Sentry::findUserById(Article::find($id)->user_id)->name);
    }

    public function create()
    {
        return \View::make('admin.articles.create');
    }

    public function store()
    {
        $validation = new PageValidator;
 
        if ($validation->passes())
        {
						$page          = new Article;
						$page->title   = Input::get('title');
						$page->body    = Input::get('body');
						$page->user_id = Sentry::getUser()->id;
            $page->save();
 
            Notification::success('新增页面成功！');
 
            return Redirect::route('admin.articles.edit', $page->id);
        }
 
        return Redirect::back()->withInput()->withErrors($validation->errors);
    }

    public function edit($id)
    {
        return \View::make('admin.articles.edit')->with('page', Article::find($id));
    }

    public function update($id)
    {
        $validation = new PageValidator;

        if ($validation->passes())
        {
						$page          = Article::find($id);
						$page->title   = Input::get('title');
						$page->body    = Input::get('body');
						$page->user_id = Sentry::getUser()->id;
            $page->save();

            Notification::success('更新页面成功！');

            return Redirect::route('admin.articles.edit', $page->id);
        }

        return Redirect::back()->withInput()->withErrors($validation->errors);
    }

    public function destroy($id)
    {
        $page = Article::find($id);
        $page->delete();

        Notification::success('删除成功！');
        return Redirect::route('admin.articles.index');
    }

}