<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MenuModel extends Model{
    public function allData(){
        
        return DB::table('menu')->get();
    }

    public function deleteData ($menu_id){

       DB::table('menu')
       ->where('menu_id', $menu_id)
       ->delete();
    } 

    public function addData($data){
        DB::table('menu')->insert($data);
    }

}