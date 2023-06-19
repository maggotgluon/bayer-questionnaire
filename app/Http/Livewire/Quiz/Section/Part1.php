<?php

namespace App\Http\Livewire\Quiz\Section;

use Illuminate\Support\Arr;
use Livewire\Component;
use Spatie\Browsershot\Browsershot;

class Part1 extends Component
{
    public $page = 0;
    public $data = [];
    public function mount()
    {
        $this->data['q-3'] = 0;
        $this->data['part'] = 1;
    }
    public function render()
    {
        return view('livewire.quiz.section.part1');
    }
    public function count(int $amount)
    {

        $this->data['q-3'] += $amount;

        if ($this->data['q-3'] < 0) {
            $this->data['q-3'] = 0;
        }
        if ($this->data['q-3'] > 14) {
            $this->data['q-3'] = 14;
        }
        // dd($amount,$this->data['count']);
    }
    public function page($page = null)
    {
        $this->page = $page ?? $this->page + 1;
        // dd($this->page);
    }

    public function updateScore()
    {
        $score = 0;
        // question 1

        if (isset($this->data['q-1'])) {
            $this->data['question-1'] = 'เธอดุดันระดับไหนก่อนมี ประจําเดือน';
            $score += 1;

            // $this->data['a1-1'] = 'เธอดุดันระดับไหนก่อนมี ประจําเดือน : ';
            switch ($this->data['q-1']) {
                case '1':
                    $this->data['answer-1'][] =  'อยากอยู่เงียบ ๆ คนเดียว';
                    // $this->data['a1-1'] .= 'อยากอยู่เงียบ ๆ คนเดียว';
                    break;
                case '2':
                    // $this->data['a1-1'] .= 'ร้องไห้กับเรืองเดิมๆ';
                    $this->data['answer-1'][] = 'ร้องไห้กับเรืองเดิมๆ';
                    break;
                case '3':
                    // $this->data['a1-1'] .= 'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !';
                    $this->data['answer-1'][] =  'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !';
                    break;
            }
        }
        if (isset($this->data['q-2'])) {

            $this->data['question-2'] = 'เธอมีความเปลี่ยนแปลง ทางร่างกายร่วมด้วยไหม';

            if (getType($this->data['q-2']) == 'array') {
                $score += count(Arr::except($this->data['q-2'], 5));

                $this->data['answer-2'][] = array_search('1', $this->data['q-2']) ? 'นอนไม่หลับ ร่างกายกระสับกระส่าย' : null;
                $this->data['answer-2'][] = array_search('2', $this->data['q-2']) ? 'ตัวบวม หน้าบวม รวมๆแล้วเซ็ง' : null;
                $this->data['answer-2'][] = array_search('3', $this->data['q-2']) ? 'สิวเก่ายังไม่หาย สิวใหม่ก็มาแทรก' : null;
                $this->data['answer-2'][] = array_search('4', $this->data['q-2']) ? 'ปวดท้องน้อย มากๆ' : null;
                $this->data['answer-2'][] = array_search('5', $this->data['q-2']) ? 'ร่างกายปกติที่แสนพิเศษ' : null;
                $this->data['answer-2'] = array_filter($this->data['answer-2']);
            } else {
                $score += $this->data['q-2'] == 5 ? 0 : 1;

                switch ($this->data['q-2']) {
                    case '1':
                        $this->data['answer-2'][] =  'นอนไม่หลับ ร่างกายกระสับกระส่าย';
                        // $this->data['a1-1'] .= 'อยากอยู่เงียบ ๆ คนเดียว';
                        break;
                    case '2':
                        // $this->data['a1-1'] .= 'ร้องไห้กับเรืองเดิมๆ';
                        $this->data['answer-2'][] = 'ตัวบวม หน้าบวม รวมๆแล้วเซ็ง';
                        break;
                    case '3':
                        // $this->data['a1-1'] .= 'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !';
                        $this->data['answer-2'][] =  'สิวเก่ายังไม่หาย สิวใหม่ก็มาแทรก';
                        break;
                    case '4':
                        // $this->data['a1-1'] .= 'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !';
                        $this->data['answer-2'][] =  'ปวดท้องน้อย มากๆ';
                        break;
                    case '5':
                        // $this->data['a1-1'] .= 'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !';
                        $this->data['answer-2'][] =  'ร่างกายปกติที่แสนพิเศษ';
                        break;
                }
            }
            // $this->data['question-1'] = 'เธอดุดันระดับไหนก่อนมี ประจําเดือน';
            // $this->data['answer-1'][] = array_search('1', $this->data['q-1'])?'อยากอยู่เงียบ ๆ คนเดียว':'';
            // $this->data['answer-1'][] = array_search('2', $this->data['q-1'])?'ร้องไห้กับเรืองเดิมๆ':'';
            // $this->data['answer-1'][] = array_search('3', $this->data['q-1'])?'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !':'';
            // dd($this->data);

            // dd($this->data);

            // switch ($this->data['q-2']) {
            //     case '1':
            //         $this->data['a1-2'] .= 'อยากอยู่เงียบ ๆ คนเดียว';
            //         break;
            //     case '2':
            //         $this->data['a1-2'] .= 'ร้องไห้กับเรืองเดิมๆ';
            //         break;
            //     case '3':
            //         $this->data['a1-2'] .= 'อา..รมณ์เสีย อารมณ์เสียยยยย อารมณ์เสียยยยยย !';
            //         break;
            // }
        }
        if (isset($this->data['day'])) {
            $this->data['question-3'] = 'เธอมักจะมีอาการเหล่านี้้ ก่อนเป็นประจําเดือนกี่วัน';
            $this->data['answer-3'][] =  $this->data['day'].' วัน';
            if ($this->data['day'] <= 10) {
                $score += 1;
            } else {
                $score += 2;
            }
        }

        if (isset($this->data['q-4'])) {

            $this->data['question-4'] = 'รู้จักภาวะ “PMDD” ไหม';

            switch ($this->data['q-4']) {
                case '1':
                    $this->data['answer-4'][] =  'รู้จัก';
                    break;
                case '2':
                    $this->data['answer-4'][] = 'ไม่แน่ใจ';
                    break;
                case '3':
                    $this->data['answer-4'][] =  'ไม่รู้จัก';
                    break;
            }
        }
        // dd($score);
        $this->data['score'] = $score;
        // dd($this->data);
        if($score == 0){
            $this->data['result'] = 1;
        } else if($score == 3){
            $this->data['result'] = 2;
        }else{
            $this->data['result'] = 3;
        }
        $this->page();
        $this->emitData();
    }
    public function screenshot()
    {
        $im = imagegrabscreen();
        imagepng($im, "myscreenshot.png");
        imagedestroy($im);
        Browsershot::url('https://www.itsolutionstuff.com')
            ->setOption('landscape', true)
            ->windowSize(3840, 2160)
            ->waitUntilNetworkIdle()
            ->save('itsolutionstuff.jpg');
    }
    public function emitData()
    {
        // dd($this->data);
        $this->emitUp('data', ['key' => '_part', 'section' => $this->data]);
    }
}
