<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class AdminController extends Controller
{
    public function adminPage(Request $request)
    {
        $user = $request->user();

        if (!$user)
            {
                return redirect('/login');
            }

        if($request->user()->role==1)
		    return view('admin');
        else
            return redirect('user');
    }
}
