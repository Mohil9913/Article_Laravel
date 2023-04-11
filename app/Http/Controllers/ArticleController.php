<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class ArticleController extends Controller
{
    public function publish(Request $request){
        if(isset($request -> id)) {
            $article = Author::where('id', $request -> id)->first();
            return view('publish')->with(['article'=>$article]);
        }
        return view('publish');
    }

    public function home(){
        $data = Author::orderBy('created_at', 'DESC')->get();
        return view('home')->with(['data'=>$data]);
    }

    public function viewArticle(Request $request){
        $id = $request->id;

        $article = Author::select('table_article.*', 'users.*')
        ->leftJoin('users', 'users.id', '=', 'table_article.author')
        ->where('table_article.id', $id)->first();

        return view('read')->with(['article'=>$article]);
    }

    public function dashboard(){
        $article = Author::where('author',auth()->user()->id)->get();
        return view('dashboard')->with(['article'=>$article]);
    }

    public function create(Request $request){
        $request->validate([
            'title' => 'required',
            'article' => 'required'
        ]);

        $data['title'] = $request->title;
        $data['article'] = $request->article;
        $data['author'] = auth()->user()->id;

        $article = Author::create($data);

        if(!$article){
            return redirect(route('publish'))->with("error", "Failed to Publish!");
        }
        return redirect(route('home'))->with("success", "Published Successfully!");
    }

    public function delete(Request $request){
        $article=Author::where('id',$request->id)->delete();
        if($article) {
            return redirect(route('dashboard'))->with('success', 'Deleted Successfully!');
        }
        return redirect(route('dashboard'))->with('error', 'Not Deleted Successfully!');
    }

    public function update(Request $request){
        $article = Author::find($request -> id);
        if (isset($request -> title)) {
            $article->title = $request -> title;
        }
        if (isset($request -> article)) {
            $article->article = $request -> article;
        }

        if($article->update()) {
            return redirect(route('dashboard'))->with('success', 'Updated Successfully!');
        }
        return redirect(route('dashboard'))->with('error', 'Not Updated Successfully!');
    }
}
