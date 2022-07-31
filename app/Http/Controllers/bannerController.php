<?php

namespace App\Http\Controllers;

use App\Http\Requests\bannerRequest;
use App\Http\Requests\updateBannerRequets;
use App\Models\banner;
use Illuminate\Http\Request;

class bannerController extends Controller
{
    private $v;
    public function __construct(){
        $this->v = [];
    }
     public function index(Request $request){
        $search =  $request->input('search_name');
        // dd($search);
        $object = new banner();
        $this->v['search'] = $search;
        $this->v['extParams'] = $request->page;
        $this->v['list'] = $object->loadListWithPager($this->v['search']);
        $this->v['list']->appends(['search_name' => $search]);
        return view('backend/banners/banner', $this->v);
     }
     public function showFormAddBanner(){
        return view('backend/banners/addBanner');
     }
     public function actionAddBanner(bannerRequest $request){
        $banner = new banner();
        $banner->addBanner($request);
        return redirect(route('showListBanner'));
     }
     public function showUpdateBanner($id){
      $banner = new banner();
      $this->v['dataOneBanner'] = $banner->loadOne($id);
      return view('backend/banners/updateBanner',$this->v);
     }
     public function UpdateBanner($id,updateBannerRequets $request){
      $banner = new banner();
      $banner->updateBanner($id,$request);
      return redirect(route('showListBanner'));
     }
}
