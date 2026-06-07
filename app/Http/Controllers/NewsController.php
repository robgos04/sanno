<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // ── Public front-end ─────────────────────────
    public function index()
    {
        $news = News::orderBy('newsdate', 'desc')->get();
        return view('news', compact('news'));
    }

    // ── Public front-end: show news detail ───────
    public function showDetail($id)
    {
        $news = News::findOrFail($id);
        return view('news-detail', compact('news'));
    }

    // ── Admin: list all ──────────────────────────
    public function adminIndex()
    {
        $news = News::orderBy('newsdate', 'desc')->get();
        return view('admin.news.index', compact('news'));
    }

    // ── Admin: show create form ──────────────────
    public function create()
    {
        return view('admin.news.create');
    }

    // ── Admin: store ─────────────────────────────
    public function store(Request $request)
    {
        $request->validate([
            'newstitle'   => 'required|string|max:255',
            'newscontent' => 'required|string|max:10000',
            'newspic'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'newsdate'    => 'required|date',
            'newssource'  => 'required|in:Internal,External',
            'newslink'    => 'nullable|url|max:255|required_if:newssource,External',
        ]);

        $filename = null;
        if ($request->hasFile('newspic')) {
            $file     = $request->file('newspic');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/news'), $filename);
        }

        News::create([
            'newstitle'   => $request->newstitle,
            'newscontent' => $request->newscontent,
            'newspic'     => $filename,
            'newsdate'    => $request->newsdate,
            'newssource'  => $request->newssource,
            'newslink'    => $request->newslink,
        ]);

        return redirect()->route('admin.news.index')
                        ->with('success', 'News article added successfully.');
    
    }

    // ── Admin: show edit form ────────────────────
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    // ── Admin: update ────────────────────────────
    public function update(Request $request, News $news)
    {
        $request->validate([
            'newstitle'   => 'required|string|max:255',
            'newscontent' => 'required|string|max:10000',
            'newspic'     => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
            'newsdate'    => 'required|date',
            'newssource'  => 'required|in:Internal,External',
            'newslink'    => 'nullable|url|max:255|required_if:newssource,External',
        ]);

        $filename = $news->newspic;

        if ($request->hasFile('newspic')) {
            // Delete old image
            if ($filename && file_exists(public_path('images/news/' . $filename))) {
                unlink(public_path('images/news/' . $filename));
            }
            $file     = $request->file('newspic');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images/news'), $filename);
        }

        $news->update([
            'newstitle'   => $request->newstitle,
            'newscontent' => $request->newscontent,
            'newspic'     => $filename,
            'newsdate'    => $request->newsdate,
            'newssource'  => $request->newssource,
            'newslink'    => $request->newslink,
        ]);

        return redirect()->route('admin.news.index')
                        ->with('success', 'News article updated successfully.');
    }

    // ── Admin: delete ────────────────────────────
    public function destroy(News $news)
    {
        $news->delete();

        return redirect()->route('admin.news.index')
                         ->with('success', 'News article deleted.');
    }
}