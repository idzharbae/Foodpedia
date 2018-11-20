<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Absen;
use App\Staff;
class AbsenController extends Controller
{
    public function datang($id){
        $human = Staff::find($id);
        $absen = new Absen;
        $absen->id_staff = $id;
        $absen->jam_datang = date('Y-m-d H:i:s');
        $absen->status = 1;
        $absen->save();
    	return $absen;
    }
    public function pulang($id_absen){
        $absen = Absen::find($id_absen);
        $absen->jam_pulang = date('Y-m-d H:i:s');
        $absen->status = 2;
        $absen->save();
    	return $absen;
    }

}
