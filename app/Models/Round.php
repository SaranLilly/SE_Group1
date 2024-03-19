<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Round extends Model
{
    use HasFactory;
    public static function getAllround(){
        $rounds = DB::table('round')->get();
        return $rounds;
    }
    public static function addround(Request $request){
        DB::insert('insert into round(
            idround ,date
            ) values (?,?)' ,[
                NULL,
                $request->date
            ]);
    }
    public static function deleteround(Request $request){
        DB::delete('delete from round where idround  = ?',
        [$request->idround]);
    }
    public static function updateround(Request $request){
        //$title=$request->titleset;
        //$title=$request->titleset;
        //dd($title);
        DB::update(
            'update round set date = ? where idround = ?',
            [$request->date,$request->id]);

           // UPDATE `setkpis` SET `titleset` = 'ssssssa' WHERE `setkpis`.`idset` = 3;
    }
}
