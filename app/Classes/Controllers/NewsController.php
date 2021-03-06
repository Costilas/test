<?php

namespace Classes\Controllers;

use Classes\Models\News;
use Classes\Utility\HttpRequest\Request;
use Classes\Utility\Facades\View\View;

class NewsController extends Controller
{
    public function index(Request $request):void{
        /*
         * По хорошему здесь необходим бидлер как в Laravel и внутри ОРМ билдер sql
            запросов, но я решил, для скорости работы просто расширить метод paginate
            дополнительным параметром для orderBy, хотя конечно, это сильно снижает гибкость
        */
        $news = News::paginate(5, $request->get('page'), ['idate' => 'DESC']);
        $title = 'News';

        View::render('news/list', compact('news', 'title'));
    }

    public function single(Request $request, $id):void{
        $article = News::find($id);
        $title = "Single article $article->id";

        View::render('news/single', compact('article', 'title'));
    }
}