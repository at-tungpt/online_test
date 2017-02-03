<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\PostRepository;
use App\Repositories\Contracts\RepositoryInterface;
use App\Repositories\Eloquent\Repository;
use Session;
use Auth;

class PostController extends Controller
{
    protected $postMedia;

    /**
     * Function__construct description
     *
     * @param postCategory $postMedia void
     */
    public function __construct(PostRepository $postMedia)
    {
        return $this->postMedia = $postMedia;
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
     * @return array     medi
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
            return ('admin.view');
        } else {
            Session::flash('msg', trans('label_trans.delete_successfully'));
            return back()->withInput();
        }
    }
}
