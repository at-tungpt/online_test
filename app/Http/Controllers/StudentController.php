<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Session;

class StudentController extends Controller
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
     * View list student
     *
     * @return array information of student
     */
    public function index()
    {
        $role = config('define.ROLESTUDENT');
        $user = $this->userRepository->getUser($role);
        return view('admin.student.index', compact('user'));
    }
}
