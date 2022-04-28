<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function lesson1() {
        return 'Я люблю учится в ЧРТ.';
    }
    public function lesson2(Request $request) {
        if($request->has('name'))
            $name = $request->input('name');
        $main = "Меня зовут {$name}";
        return $main;
    }
    public function lesson3(Request $request) {
        if(($request->has('name'))&&($request->has('fruit')))
            $name = $request->input('name');
        $fruit = $request->input('fruit');
        $main = "Меня зовут {$name} и я люблю есть {$fruit}";
        return $main;
    }

    public function lesson4() {
        $a = 2;
        $b = 2;
        $sum = $a + $b;
        $main = "сумма чисел {$a} + {$b} = {$sum}";
    return $main;
    }

    public function lesson5(Request $request) {
        if(($request->has('FirstNum'))&&($request->has('SecondNum')))
            $firNum = $request->input('FirstNum');
        $secNum = $request->input('SecondNum');
        $sum = $firNum + $secNum;
        $main = "сумма чисел {$firNum} + {$secNum} = {$sum}";
        return $main;
    }

    public function lesson6(Request $request) {
        if($request->has('cipher')){
            $cipher = $request->input('cipher');
            if($cipher == "keyOneTest"){
                return 'Я взломал шифр';
            }
            else{
                return 'Нет доступа';
            }
        }
        else{
            return 'Нет доступа';
            }
    }



    public function lessonTemplateOne() {
        return view('template');
    }

    public function lessonTemplate2($organization) {
        return view('template2',compact('organization'));
    }

    public function lessonTemplate3($name) {
        return view('template3',compact('name'));
    }

    public function lessonTemplate4() {
        $array = array(
            '1','2','3'
        );
        return view('template4',compact('array'));
    }
    public function lessonTemplate5() {
        $array = array(
            '1','2','3'
        );
        return view('template5',compact('array'));
    }
    public function lessonTemplate6() {
        $number = array(
            1,2,3,4,5,6,7,8,9
        );
        return view('template6',compact('number'));
    }

}
