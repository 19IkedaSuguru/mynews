<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    //以下を追記 
    public function add()
    {
        return view('adomin.news.create');
    }

}

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    //応用】 Admin/ProfileControllerに、
    //以下のadd, create, edit, update 
    //それぞれのActionを追加してみましょう。
     public function add()
  {
      return view('admin.profile.create');
  }
    
}
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class profileController extends Controller
{
    public function create()
  {
      return redirect('admin/profile/create');
  }
  public function edit()
 {
 return view('admin.profile.edit');
 }
 public function update()
 {
 return redirect('admin/profile/edit');
 }
}
