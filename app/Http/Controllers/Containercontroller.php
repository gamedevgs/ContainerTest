<?php

namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Container_Model;
use Illuminate\Support\Facades\Input;
class Containercontroller extends Controller
{
    public function GetAdd()
    {
        $data= Container_Model::orderBy('receving')->get();
        return view('welcome',['data'=>$data]);
    }

    public function Show()
    {
        return Container_Model::orderBy('receving')->get();

    }
    public function Getreceving($number)
    {
       return Container_Model::where('receving',$number)->get();
    }

    public function Getid($id)
    {
        return Container_Model::find($id);
    }
    public function Addvalure(Request $request)
    {

        $rules = [
            'receving.*' =>'required|numeric|min:1|max:200|unique:receving',
            'style_no.*' => 'required|numeric|min:1|max:200',
            'uom.*' => 'required|numeric|min:1|max:200',
            'prefix.*'=>'required|numeric|min:1|max:200',
            'sufic.*' => 'required|numeric|min:1|max:200',
            'height.*' => 'required|numeric|min:1|max:200',
            'width.*' =>'required|numeric|min:1|max:200',
            'length.*' => 'required|numeric|min:1|max:200',
            'weight.*' => 'required|numeric|min:1|max:200',
            'upc.*' => 'required|numeric|min:1|max:200',
            'size1.*' => 'required|numeric|min:1|max:200',
            'size2.*' =>'nullable|numeric|min:1|max:200',
            'color2.*' => 'nullable|numeric|min:1|max:200',
            'size3.*' => 'nullable|numeric|min:1|max:200',
            'color3.*' => 'nullable|numeric|min:1|max:200',
            'carton.*' => 'required|numeric|min:1|max:200'
        ];
//
//        $customMessages = [
//            'style_no.*.required' => 'Each person must have a unique e-mail address',
//
//            'style_no.*.numeric' => ' Please input a number at?',
//            'style_no.min' => 'Yo, what should I call you?',
//            'style_no.max' => 'Yo, what should I call you?',
//            'style_no.unique' => 'Yo, what should I call you?',
//        ];

     $this->validate($request, $rules);
        $data = $request->all();
        $style_no = $data['style_no'];
        $detailorder = new Container_Model;
        $detailorder->receving =$data['receving'];
        foreach ($style_no as $key => $value)
        {
            $detailorder = new Container_Model;
            $detailorder->receving =$data['receving'];
            $detailorder->style_no = $data['style_no'][$key];
            $detailorder->uom = $data['uom'][$key];
            $detailorder->prefix = $data['prefix'][$key];
            $detailorder->sufic = $data['sufic'][$key];
            $detailorder->height = $data['height'][$key];
            $detailorder->width = $data['width'][$key];
            $detailorder->length = $data['length'][$key];
            $detailorder->weight =$data['weight'][$key];
            $detailorder->upc = $data['upc'][$key];
            $detailorder->size1 = $data['size1'][$key];
            $detailorder->color1 = $data['color1'][$key];
            $detailorder->size2 = $data['size2'][$key];
            $detailorder->color2 = $data['color2'][$key];
            $detailorder->size3 = $data['size3'][$key];
            $detailorder->color3 = $data['color3'][$key];
            $detailorder->carton = $data['carton'][$key];
            $detailorder->save();
        }
        return redirect('/')->with('thongbao', 'Thêm thành công!');
    }
}

