<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePost2Request;
use App\Http\Requests\UpdatePost2Request;
use App\Repositories\Post2Repository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class Post2Controller extends AppBaseController
{
    /** @var Post2Repository $post2Repository*/
    private $post2Repository;

    public function __construct(Post2Repository $post2Repo)
    {
        $this->post2Repository = $post2Repo;
    }

    /**
     * Display a listing of the Post2.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index()
    {
        if(auth()->user()->role == 'admin'){

            $post2s = $this->post2Repository->all();
        }else{

            $post2s = $this->post2Repository->all(['user_id'=>auth()->user()->id]);
        }

        return view('post2s.index')
            ->with('post2s', $post2s);
    }

    public function getall()
    {
        $posts = $this->post2Repository->all();

        return view('posts.index')
            ->with('posts', $posts);
    }

    /**
     * Show the form for creating a new Post2.
     *
     * @return Response
     */
    public function create()
    {
        return view('post2s.create');
    }

    /**
     * Store a newly created Post2 in storage.
     *
     * @param CreatePost2Request $request
     *
     * @return Response
     */
    public function store(CreatePost2Request $request)
    {
        $input = $request->all();

        $post2 = $this->post2Repository->create($input);

        Flash::success('Post2 saved successfully.');

        return redirect(route('post2s.index'));
    }

    /**
     * Display the specified Post2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $post2 = $this->post2Repository->find($id);

        if (empty($post2)) {
            Flash::error('Post2 not found');

            return redirect(route('post2s.index'));
        }

        return view('post2s.show')->with('post2', $post2);
    }
    /**
     * Display the specified Post2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show2($id)
    {
        $post = $this->post2Repository->find($id);

        if (empty($post)) {
            Flash::error('Post not found');

            return redirect(route('posts.index'));
        }

        return view('posts.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified Post2.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $post2 = $this->post2Repository->find($id);

        if (empty($post2)) {
            Flash::error('Post2 not found');

            return redirect(route('post2s.index'));
        }

        return view('post2s.edit')->with('post2', $post2);
    }

    /**
     * Update the specified Post2 in storage.
     *
     * @param int $id
     * @param UpdatePost2Request $request
     *
     * @return Response
     */
    public function update($id, UpdatePost2Request $request)
    {
        $post2 = $this->post2Repository->find($id);

        if (empty($post2)) {
            Flash::error('Post2 not found');

            return redirect(route('post2s.index'));
        }

        $post2 = $this->post2Repository->update($request->all(), $id);

        Flash::success('Post2 updated successfully.');

        return redirect(route('post2s.index'));
    }

    /**
     * Remove the specified Post2 from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $post2 = $this->post2Repository->find($id);

        if (empty($post2)) {
            Flash::error('Post2 not found');

            return redirect(route('post2s.index'));
        }

        $this->post2Repository->delete($id);

        Flash::success('Post2 deleted successfully.');

        return redirect(route('post2s.index'));
    }
}
