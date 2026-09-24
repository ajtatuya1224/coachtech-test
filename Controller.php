<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
 use AuthorizesRequests, ValidatesRequests;

class Controller extends BaseController
{
    //入力画面の表示
    public function index()
    {
        return view('contact.index');
    }

    //確認画面の表示
    public function confirm(Request $requrst)
    {
        //入力チェック
        $validated = $request->validate([
            $contact = $request->only(['last_name', 'first_name', 'gender2', 'email','phonenumber','address','building_name', 'opinion']);
            
            return view('contact.confirm', ['inputs' => $validated]);
        ])
    }

    //送信の処理
    public function send(Request $request)
    {
        //送信を押した時の処理
        $action = $request->input('action');
        //修正を押した時
        if($action === 'back') {
            return redirect()->route('contact.index')->withInput();
        }

        //データの再取得
        $inputs = $request->only(['last_name', 'first_name', 'gender2', 'email','phonenumber','address']);
    }
   //完了画面
   return view('contact.thanks');
}
