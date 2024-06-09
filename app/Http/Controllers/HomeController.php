<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public $blogs, $blog, $result, $firstNumber, $secondNumber, $resultOddEven;

    public function index()
    {
        $this->blogs = Blog::getBlog();
        return view('home', ['blogs' => $this->blogs]);
    }

    public function series()
    {
        return view('series');
    }

    public function oddEven()
    {
        return view('odd-even');
    }

    public function password()
    {
        return view('password');
    }

    public function detail($id)
    {
        $this->blog = Blog::getSingleBlogById($id);
        return view('detail', ['blog' => $this->blog]);
    }

    public function seriesCalculate(Request $request)
    {
        $this->firstNumber = $request->first_number;
        $this->secondNumber = $request->second_number;
        if ($this->firstNumber > $this->secondNumber) {
            for ($i = $this->firstNumber; $i >= $this->secondNumber; $i--) {
                $this->result = $this->result . ' ' . $i;
            }
            $this->result;

        } elseif ($this->firstNumber < $this->secondNumber) {
            for ($i = $this->firstNumber; $i <= $this->secondNumber; $i++) {
                $this->result = $this->result . ' ' . $i;
            }
            $this->result;
        } elseif ($this->firstNumber == $this->secondNumber) {
            $this->result = $this->firstNumber;
        }

        return back()->with('message', $this->result);


    }

    public function oddEvenCalculate(Request $request)
    {

    }

    public function passwordGenerator(Request $request)
    {
        $data = ['!', '@', 'A', '$', 'a', 'b', '%'];
        $this->result = '';
        for ($i = 1; $i <= $request->password_length; $i++) {
            $arrayMaxNumber = count($data) - 1;
            $index = rand(0, $arrayMaxNumber);
            $passwordKey = $data[$index];
            $this->result .= $passwordKey;
        }
        return back()->with('message', $this->result);
    }
}
