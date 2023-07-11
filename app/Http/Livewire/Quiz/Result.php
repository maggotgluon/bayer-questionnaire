<?php

namespace App\Http\Livewire\Quiz;

use Livewire\Component;
use VerumConsilium\Browsershot\Facades\Screenshot;

class Result extends Component
{
    public $path,$result,$age;

    public $title,$images,$content, $image_face,$lottie,$idkey;
    public function mount(){
        $content['1']['1']['title']='สาวสมดุล';
        $content['1']['1']['content']='สาวสมดุล เพราะอาการก่อนมีประจําเดือน
                                        ของเธออยู่ในเกณฑ์ที่ไม่เสียง ต้องรอดู
                                        อาการทังทางร่างกาย และจิตใจ แต่ยังไงก็
                                        หมันสังเกตตัวเองเสมอนะสาว';
        $content['1']['1']['images']='';

        $content['1']['2']['title']='สาวนักแปร (ปรวน)';
        $content['1']['2']['content']='สาวนักแปร (ปรวน) เริ่มมีอารมณ์
                                        แปรปรวน วิตกกังวล อ่อนไหวช่วงก่อนมี
                                        ประจําเดือน ทําให้เริ่มส่งผลต่อชีวิตประจํา
                                        วัน เธออย่าชะล่าใจ รีบปรึกษาผู้เชี่ยวชาญ
                                        นะสาว';
        $content['1']['2']['images']='';

        $content['1']['3']['title']='สาวดุดัน ไม่เกรงใจใคร';
        $content['1']['3']['content']='สาวดุดัน ไม่เกรงใจใคร อาการก่อนมีประจํา
                                        เดือนของเธอ มีความผิดปกติทั้งทาง
                                        ร่างกายและจิตใจที่ควบคุมได้ยาก เธอต้อง
                                        รีบปรึกษาผู้เชี่ยวชาญได้แล้วนะสาว';
        $content['1']['3']['images']='';


        $content['2']['1']['title']='สาวนักปรนนิบัติผิว';
        $content['2']['1']['content']='สาวนักดูแลผิว สิวฮอร์โมนยังไม่ก่อกวน แต่
                                        เธอเริ่มมีความกังวล ยังไงก็หมั่นดูแลตัว
                                        เองเสมอนะสาว';
        $content['2']['1']['images']='';

        $content['2']['2']['title']='สาวสู้สิว';
        $content['2']['2']['content']='สาวนักบู๊ สู้กับสิวฮอร์โมน เพราะสัญญาณ
                                        ของสิวฮอร์โมนเริ่มก่อกวนใจ สิวเธอเริ่ม
                                        เห่อแดง แถมความมันใจก็ลดลง ลอง
                                        ปรึกษาผู้เชี่ยวชาญนะสาว';
        $content['2']['2']['images']='';

        $content['2']['3']['title']='สาวเศร้าเพราะหน้ามีสิว';
        $content['2']['3']['content']='สาวเศร้าหนัก เพราะสิวฮอร์โมนขึ้นบ่อย ขึ้น
                                        ซํ้า รอยเก่ายังไม่ทันหาย รอยใหม่ก็มา
                                        ทักทายอีกแล้ว รีบปรึกษาผู้เชี่ยวชาญเพื่อ
                                        ปรับสมดุลในร่างกายนะสาว';
        $content['2']['3']['images']='';


        $content['3']['1']['title']='สาวสม่ำเสมอ';
        $content['3']['1']['content']='สาวสม่ำเสมอ เพราะประจําเดือนที่มาประจํา
                                        ทําให้ชีวิตเธอไร้กังวล แต่ก็อย่าลืมสังเกต
                                        ร่างกายตัวเองเสมอนะสาว';
        $content['3']['1']['images']='';

        $content['3']['2']['title']='สาวสะดุด';
        $content['3']['2']['content']='สาวสะดุด เพราะประจําเดือนเริ่มมาไม่ประจํา
                                        สะดุดบ้าง ขาดๆ หายๆ ก็ทําใจหายทุกครัง
                                        ต้องปรึกษาผู้เชี่ยวชาญได้แล้วนะสาว';
        $content['3']['2']['images']='';

        $content['3']['3']['title']='สาวนักแปลงร่าง';
        $content['3']['3']['content']='สาวร่างเป็นสตรี แต่เหมือนมีฮอร์โมนชาย
                                        หนุ่มมาแทรกแซง ประจําเดือนขาดๆ หายๆ
                                        ร่างกายส่งสัญญาณผิดปกติ ต้องรีบ
                                        ปรึกษาผู้เชี่ยวชาญนะสาว';
        $content['3']['3']['images']='';
        $path = $this->path;
        $result = $this->result;
        // dd($path,gettype($path),$result,gettype($result));
        $this->idkey = 'key'.$path.'-'.$result;
        $this->title=$content[$path][$result]['title'];
        $this->content=$content[$path][$result]['content'];
        $this->images='images/result_img_'.$path.'-'.$result.'.png';
        
        $this->lottie=asset('images/lottie/result'.$path.'-'.$result.'.json');
        $this->image_face = 'images/result_'.$result.'.png';
    }


    public function screenshot(){
        $this->dispatchBrowserEvent('save-updated');
    }
    public function render()
    {
        return view('livewire.quiz.result');
    }
}
