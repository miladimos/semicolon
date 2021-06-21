<?php

namespace App\Http\Controllers\Webmaster\Comment;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    // public function __construct()
    // {
    //     $this->middleware('can:create-comment,user');
            // $this->middleware('can:edit-comment')->only(['edit', 'update']);
    // }

    public function index()
    {
        $this->seo()->setTitle('نظرات ');

        $comments = Comment::latest()->paginate(20);
        return view('webmaster.comments.all', compact('comments'));
    }

    public function create()
    {
        $this->seo()->setTitle('ثبت نظرات جدید');
        return view('webmaster.comments.create');
    }

    public function store(Request $request)
    {
        $comments = Comment::create($request->only('title', 'description'));

        return redirect()->route('webmaster.comments.index')->with('success', 'نظرات مورد نظر با موفقیت ایجاد شد.');
    }

    // public function store(SeriesRequest $request)
    // {
    //     $series = $this->dispatchNow(CreateSeries::fromRequest($request));

    //     $this->success('series.created');

    //     return redirect()->route('user.series');
    // }

    public function show(Comment $comment)
    {
        $this->seo()->setTitle('جزییات نظر ');

        return view('webmaster.comments.show', compact('comment'));
    }

    public function approve(Comment $comment)
    {
        $comment->update([
            'approved' => 1
        ]);
        return redirect()->route('webmaster.comments.index')->with('success', 'نظرات مورد نظر با موفقیت تایید شد.');
    }

    public function edit(Comment $comment)
    {
        $this->seo()->setTitle('ویرایش نظرات');
        return view('webmaster.comments.edit', compact('comments'));
    }

    public function update(Request $request, Comment $comment)
    {
        $comment->update($request->only('title', 'description'));
        return redirect()->route('webmaster.comments.index')->with('success', 'نظرات مورد نظر با موفقیت ویرایش شد.');
    }

    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('webmaster.comments.index')->with('success', 'نظرات مورد نظر با موفقیت حذف شد.');
    }
}
