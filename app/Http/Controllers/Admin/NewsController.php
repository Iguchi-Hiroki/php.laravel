<?php

namespace App\Http\Controllers\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\News;

class NewsController extends Controller
{
  public function add()
 {
     return view('admin.news.create');
  }
    
  public function create(Request $request)
 {
    // Varidationを行う
    $this->validate($request, News::$rules);
    $news = new News;
    $form = $request->all();
     
    // formに画像があれば、保存する
    if ($form['image']) {
        $path = $request->file('image')->store('public/image');
        $news->image_path = basename($path);
    } else {
         $news->image_path = null;
    }
     
    unset($form['_token']);
    unset($form['image']);
     
    // データベースに保存する
    $news->fill($form);
    #news->save();
     
    return redirect('admin/news/create');
 }
 
 public function index(Request $request)
 {
    $cond_title = $request->cond_title;
    if ($cond_title != '') {
        $posts = News::where('title', $cond_title)->get();
    } else {
        $posts = News::all();
    }
    return view('admin.news.index', ['posts' => $posts, 'cond_title' => $cond_title]);
 }
 
public function edit(Request $request)
  {
    // News Modelからデータを取得する
    $news = News::find($request->id);
    if (empty($news)) {
        abort(404);    
    }
    return view('admin.news.edit', ['news_form' => $news]);
  }


  public function update(Request $request)
  {
    // Validationをかける
    $this->validate($request, News::$rules);
    // News Modelからデータを取得する
    $news = News::find($request->id);
    // 送信されてきたフォームデータを格納する
    $news_form = $request->all();
    if (isset($news_form['image'])) {
      $path = $request->file('image')->store('public/image');
      $news->image_path = basename($path);
      unset($news_form['image']);
    } elseif (isset($request->remove)) {
      $news->image_path = null;
      unset($news_form['remove']);
    }
      unset($news_form['_token']);
      // 該当するデータを上書きして保存する
    $news->fill($news_form)->save();

    return redirect('admin/news');
  }
}
