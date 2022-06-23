<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
        function list($id=null){
            return $id?Device::find($id):Device::all();
        }    

        function add(Request $req){

            $device = new Device;
            $device->name= $req->name;
            $device->member_id= $req->member_id;
            $result = $device->save();
            if($result){
                return ["result"=>"Data Submited Successfully"];
            }else{
                    return ["result"=>"Data Not Sbmitted"];
            }
        }

        // Update Function
        function update(Request $req){
            $device = Device::find($req->id);
            $device->name = $req->name;
            $device->member_id = $req->member_id;
            $result = $device->save();
            if($result){
                return ["result"=>"Data Updated Successfully"];
            }else{
                return ["result"=>"Update Operation Failed"];
            }
        }

        // Delele Function
        function delete($id){
            $device = Device::find($id);
            $result = $device->delete();
            if($result){
                return ['result'=>"Data has been Deleted"];
            }else{
            return ['result'=>"Delete Operation Failed"];
            }
        }
    }
