<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    // Admin Dashboard
    public function AdminDashboard()
    {
        return view('admin.admin_dashboard');
    }
      // Admin Logout
      public function AdminLogout(Request $request)
      {
          Auth::guard('web')->logout();

        //   $notification = array(
        //       'message' => 'Logout Successfully',
        //       'alert-type' => 'info',
        //   );

          $request->session()->invalidate();

          $request->session()->regenerateToken();

          return redirect()->route('login');


      }
}
