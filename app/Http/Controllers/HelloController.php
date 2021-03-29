<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\item;

class HelloController extends Controller
{
    public function show(){
        return view('profile');
        //return view('vision');
    }
    
    public function vision(){
        //return view('profile');
        return view('vision');
    }

    public function syukudai1(){
        return view('syukudai1');
    }

    public function career(){
        return view('career');
    }
    
    public function contact(){
        return view('contact');
    }
    
     public function syukudai1css(){
        return view('syukudai1css');
    }

     public function store(Request $request){
        
        //Contactのモデルを生成
        $contact = new Contact;
        //名前をモデルを登録
        $contact->name=$request->yourname;
        $contact->mail=$request->mail;
        $contact->age=$request->age;
        $contact->title=$request->subject;
        $contact->contact=$request->comment;
        
        //DBに登録
        $contact->save();
        
        //dump($request->yourname);
        //dump($request->mail);
        //dump($request->age);
        //dump($request->subject);
        //dd($request->comment);
        return redirect('contact');
    }
    
 public function dai(){
        return view('dai');
    }
    
     public function chu(){
        return view('chu');
    }
    
     public function syo(){
        return view('syo');
    }
    
     public function tensuu(){
        return view('tensuu');
    }

    public function tensuujs(){
        return view('tensuujs');
    }
    
    public function tensuu1(){
        return view('tensuu1');
    }
    
    public function result(Request $request){
        //$message="oooooooooi";
        //$message=$request->number;
        
        if($request->number>=0 && $request->number<50){
            $message="頑張りましょう";
        }else if($request->number>=50 && $request->number<80){
            $message ="よくできました";
        }else if($request->number>=80 && $request->number<=100){
            $message="大変よくできました";
        }else{
            $message="0〜100の数字を入力してください";
        }
        
        return view('result',compact('message'));
    }
    
    public function tensuu2(){
        return view('tensuu2');
    }    
    
    public function result2(Request $request2){
        $num =0;
        for($i=1; $i<=$request2->number2; $i++){
            $num =($num+$i);
        }
        return view('result2', compact('num'));
    }
    public function tensuu3(){
        return view('tensuu3');
    }
    
    public function result3(Request $request3){
        $coustomers =[100, 101, 102, 103, 104, 105];
        foreach($coustomers as $coustomer){
            if($request3->number3 == $coustomer){
                $message2 ='登録されています';
                break;
            }else{
                $message2 ='登録されていません';
            }
        }
        return view('result3', compact('message2'));
    }
    
    public function table(){
        return view('table');
    }
    
    public function itemscontact(){
        return view('itemscontact');
    }
    
    
    public function items2(Request $request4){
        $items= new item;
        
        //idではなくてnameを紐づける
        $items->itemid=$request4->itemid;
        $items->name=$request4->name;
        $items->price=$request4->price;
        $items->stock_puantity=$request4->stock_puantity;
        
        $items->save();
        
         return redirect('itemsTable');
         return view('itemsTable');

    }
    
    public function itemsTable(){
        $items = item::all();
        //dd($items);
        return view('itemsTable',compact('items'));
    }
    
    
    
    //item::all(); このコマンドでアイテムモデルにあるものを出している
    
    
}

