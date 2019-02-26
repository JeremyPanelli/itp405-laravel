<?php
<<<<<<< HEAD
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
class SettingController extends Controller
{
    public function index() {
        $maintenance = DB::table('configurations')->where('name', '=', 'maintenance')->get();
        $maintenanceSetting = false;
        if($maintenance[0]->value == 'on') {
            $maintenanceSetting = true;
        }
        return view('setting', [
            'maintenanceSetting' => $maintenanceSetting
        ]);
    }
    public function update() {
        if(request('maintenance') == 'on') {
            DB::table('configurations')
                ->where('name', '=', 'maintenance')
                ->update(['value' => 'on']);
        } else {
            DB::table('configurations')
=======

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class SettingController extends Controller
{
    public function index()
    {
        $configTable = DB::table('configs')->where('name', '=', 'maintenance')->get();
        $maintenance = true;
        if($configTable[0]->value == 'off') {
            $maintenance = false;
        }
        return view('admin/settings', [
          'maintenance' => $maintenance
        ]);
    }
    public function update() {
        if(request('maintenance') == 'on')
        {
            DB::table('configs')
                ->where('name', '=', 'maintenance')
                ->update(['value' => 'on']);
        }
        else
        {
            DB::table('configs')
>>>>>>> itp-405-laravel
                ->where('name', '=', 'maintenance')
                ->update(['value' => 'off']);
        }
        return redirect('/settings');
    }
}
