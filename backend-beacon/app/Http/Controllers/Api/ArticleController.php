<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;

class ArticleController extends Controller
{
    /**
     * GET /api/v1/articles?category=case-study&page=1
     */
    public function index()
    {
        $query = Article::active()->published()->latest('published_at');

        if ($category = request('category')) {
            $query->where('category', $category);
        }

        $articles = $query->paginate(9)->through(fn ($a) => [
            'id' => $a->id,
            'title' => $a->title,
            'slug' => $a->slug,
            'excerpt' => $a->excerpt,
            'thumbnail' => $a->thumbnail ? asset('storage/' . $a->thumbnail) : null,
            'category' => $a->category,
            'author' => $a->author,
            'published_at' => $a->published_at?->format('Y-m-d'),
        ]);

        return response()->json($articles);
    }

    /**
     * GET /api/v1/articles/{slug}
     */
    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)
            ->active()
            ->published()
            ->firstOrFail();

        $related = Article::active()
            ->published()
            ->where('id', '!=', $article->id)
            ->where('category', $article->category)
            ->limit(3)
            ->get()
            ->map(fn ($a) => [
                'title' => $a->title,
                'slug' => $a->slug,
                'thumbnail' => $a->thumbnail ? asset('storage/' . $a->thumbnail) : null,
                'published_at' => $a->published_at?->format('Y-m-d'),
            ]);

        return response()->json([
            'article' => [
                'id' => $article->id,
                'title' => $article->title,
                'slug' => $article->slug,
                'excerpt' => $article->excerpt,
                'content' => $article->content,
                'thumbnail' => $article->thumbnail ? asset('storage/' . $article->thumbnail) : null,
                'category' => $article->category,
                'author' => $article->author,
                'published_at' => $article->published_at?->format('Y-m-d'),
            ],
            'related_articles' => $related,
        ]);
    }
}
