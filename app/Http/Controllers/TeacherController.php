<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Session;

class TeacherController extends Controller
{
    protected $userRepository;

     /**
     * Function__construct description
     *
     * @param UserRepository $userRepository void
     */
    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

     /**
     * View list teacher
     *
     * @return array information of student
     */
    public function index()
    {
        $role = config('define.ROLETEACHER');
        $user = $this->userRepository->getUser($role);
        return view('admin.view', compact('user'));
    }

    /**
     * Show detail of user
     *
     * @param int $id id of user
     *
     * @return array     information of user
     */
    public function show($id)
    {
        $role = config('define.ROLETEACHER');
        $user = $this->userRepository->getById($role, $id);
        if (empty($user)) {
            Session::flash('msg', trans('label_trans.not_found'));
            return view('admin.index');
        }
        return view('admin.show', compact('user'));
    }

    /**
     * Block teacher by id
     *
     * @param int $id id of teacher
     *
     * @return array     teach
     */
    public function blockUser($id)
    {
        $role = config('define.ROLETEACHER');
        $user = $this->userRepository->block($role, $id);
        if (empty($user)) {
            Session::flash('msg', trans('label_trans.not_found'));
            return view('admin.index');
        }
        return back()->withInput();
    }
}
