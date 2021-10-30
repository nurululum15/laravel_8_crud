<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MenuModel;

class MenuController extends Controller{
    public function __construct(){
        $this->MenuModel = new MenuModel();
    }

    public function index(){
        $data = [
            'menu'=> $this->MenuModel->allData(),
        ];
        return view('menu', $data);
    }

    public function add(){
        return view('addmenu');
    }

    public function insert(){
        Request();

        $data = [
            'id' => Request()->id,
            'name' => Request()->name,
            'origin' => Request()->origin,
            'description' => Request()->description,
            'price' => Request()->price,
        ];

        $this->MenuModel->addData($data);
        return redirect()->route('menu')
            ->with('success', 'Data added successfully.');
    }

    public function edit($menu_id)
    {
        return view('editmenu');
    }

    // public function destroy($menu_id)
    // {
    //     $menu_id -> delete();

    //     return redirect('/menu')
    //         ->with('success', 'Project deleted successfully');
    // }

    public function delete($menu_id){

        $this-> MenuModel-> deleteData($menu_id);
        return view('menu');
        // return->redirect()->route('menu')->with('pesan', 'Data Berhasil Di Hapus !!!')
    }

}





