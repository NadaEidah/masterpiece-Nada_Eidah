<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use App\Category;
use App\Comment;
use App\Post2;
use App\Work;
use App\Step;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user_id=auth()->user()->id;
        $user=User::find($user_id);
        return view('home')->with('posts',$user->posts)->with('posts2',$user->posts2)->with('works',$user->works)->with('steps',$user->steps);
    }

      /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        $posts= Post::orderBy('created_at','desc')->get();
        $users= User::orderBy('created_at','desc')->get();
        $post2s= Post2::orderBy('created_at','desc')->get();
        $works= Work::orderBy('created_at','desc')->get();
        $comments= Comment::orderBy('created_at','desc')->get();
        $postsss= Post::where('user_id','=',88)->count();
        // $userPost= Post::with('user')->where('user_id','=',1)->count();
        // dd($postsss);
        $postsCount = Post::where('user_id', auth()->user()->id)->count();
        $usersCount = Post::where('user_id', auth()->user()->id)->count();

        return view('adminHome')
        ->with('postsCount',$postsCount)
        ->with('usersCount',$usersCount)
        ->with('users_count',User::all()->count())
        // ->with('users',User::all())
         ->with('users',$users)
        ->with('posts',$posts)
        ->with('post2s',$post2s)
        ->with('works',$works)
        ->with('comments',$comments)
        ->with('postsss',$postsss)
        ->with('post_count',Post::all()->count())
        ->with('category_count',Category::all()->count())
        ->with('comment_count',Comment::all()->count())
        ->with('post2_count',Post2::all()->count())
        ->with('work_count',Work::all()->count())
        ->with('step_count',Step::all()->count())
        ->with('post2_win',Post::all())
        // ->with('post2_win',Post::all()->count()>1)
        ;
    }
    public function admin()
    {
        return view('adminHome')
        ->with('users_count',User::all()->count())
        ->with('post_count',Post::all()->count())
        ->with('category_count',Category::all()->count())
        ->with('comment_count',Comment::all()->count())
        ->with('post2_count',Post2::all()->count())
        ->with('work_count',Work::all()->count())
        ->with('step_count',Step::all()->count())
        ;
    }
}



        // $posts= Post::where('user_id','=','user_id')->count();
        // $postsx= Post::where('user_id',$posts->user_id);
        // $user=User::find($id);


        // ->with('postss',$postss)
        // ->with('userPost',$userPost)
        // ->with('postsx',$postsx)->count()
        // ->with('posts',$posts_cc)