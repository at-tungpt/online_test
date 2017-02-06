<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Repositories\UserRepository;
use App\Repositories\PostCategoryRepository;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;
use Session;
use Auth;

class PostController extends Controller
{
    protected $postMedia;
    protected $userRepository;
    protected $postCategory;

    /**
     * Function__construct
     *
     * @param PostRepository         $postMedia      array
     * @param UserRepository         $userRepository array
     * @param PostCategoryRepository $postCategory   array
     */
    public function __construct(PostRepository $postMedia, UserRepository $userRepository, PostCategoryRepository $postCategory)
    {
        $this->postMedia = $postMedia;
        $this->userRepository = $userRepository;
        $this->postCategory = $postCategory;
    }

    /**
     * List all categories
     *
     * @return array categories
     */
    public function index()
    {
        $postMedia = $this->postMedia->getAll();
        return view('post/view', compact('postMedia'));
    }

    /**
     * Delete a Post media
     *
     * @param int $id id of media
     *
     * @return array     media
     */
    public function destroy($id)
    {
        $media = $this->postMedia->find($id);
        $image = $media->image;
        if (file_exists(config('path.path_media').$image) == true) {
            unlink(config('path.path_media').$image);
        }
        $postMedia = $this->postMedia->delete($id);
        if (empty($postMedia)) {
            Session::flash('msg', trans('label_trans.not_found'));
            return view('admin.index');
        } else {
            Session::flash('msg', trans('label_trans.delete_successfully'));
            return back()->withInput();
        }
    }

    /**
     * Show detial of media
     *
     * @param int $id id of media
     *
     * @return array     information of media
     */
    public function show($id)
    {
        $detailMedia = $this->postMedia->find($id);
        if (empty($detailMedia)) {
            Session::flash('msg', trans('label_trans.not_found'));
            return view('admin.index');
        } else {
            $idUser = $detailMedia->user_id;
            $user = $this->userRepository->find($idUser);
            $idCategory = $detailMedia->post_category_id;
            $category = $this->postCategory->find($idCategory);
            return view('post.show', compact('detailMedia', 'user', 'category'));
        }
    }
}
