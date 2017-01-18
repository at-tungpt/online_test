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
        return view('admin.teacher.index', compact('user'));
    }
}
