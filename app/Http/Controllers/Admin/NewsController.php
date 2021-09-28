<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    private $model;
    
    public function __construct(News $news)
    {
        $this->model = $news;
    }
    
    public function getIndex()
    {
        $news = $this->model
        ->with('createdBy')
        ->orderBy('id', 'desc')
        ->paginate(config('common.paginate'));
        return view('admin.pages.news.index', compact('news'));
    }
    
    public function delete(Request $request)
    {
        $news = $this->model->find($request->input('id'));
        if ($news){
            $this->model->where('id', $news->id)->delete();
            $news->delete();
            
            return redirect(route('admin.news.get'))
            ->with('success', __('validation.form.success.delete'));
        }
        return redirect(route('admin.news.get'))
        ->with('info', __('validation.form.info'));

    }
}
