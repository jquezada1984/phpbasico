<?php
namespace App\Controllers;


class Menus extends BaseController
{
    public function index(): string
    {
        $js=array('js/demo/chart-area-demo.js','js/demo/datatables-demo.js');
        $cs=array('vendor/datatables/dataTables222.bootstrap4.min.css');
        $data=array('content'=>'menus','title'=>'Menus','csss'=>$cs,'scripts'=>$js);
        return view('principal',$data);
    } 
}
