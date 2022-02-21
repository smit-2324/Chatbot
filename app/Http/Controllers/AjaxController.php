<?php
namespace App\Http\Controllers;
   

use Illuminate\Http\Request;
use App\Models\User;
use Ramsey\Uuid\Uuid;
   
class AjaxController extends Controller
{
    public function findbyid($id){
        return User::where('external_id',$id)->first();
    }
    public function ajaxRequestPost(Request $request){
            $step = $request->step;
          
            switch($step){
                case 1:
                    $fileName = $request->file->getClientOriginalName();  
                    $path =  $request->file->move(public_path('uploads'), $fileName);
                    $selfie_path = explode("\public",$path);
                    $external = Uuid::uuid4()->toString();
                    $user =  (new User)->forceFill(['external_id' => $external,'selfie_path' => $selfie_path[1]]);
                    $user->save();
                    return $external;
                    break;
                case 2:
                    $external = $request->external_id;
                    $fileName = $request->file->getClientOriginalName();  
                    $path =  $request->file->move(public_path('uploads'), $fileName);
                    $addressProof = explode("\public",$path);
                    $user = $this->findbyid($external);
                    $user->fill([
                         'addr_proof' => $addressProof[1],
                        ])->save();
                    break;
                case 3:
                    $external = $request->external_id;
                    $fileName = $request->file->getClientOriginalName();  
                    $path =  $request->file->move(public_path('uploads'), $fileName);
                    $id_proof = explode("\public",$path);
                    $user = $this->findbyid($external);
                    $user->fill([
                        'id_proof' => $id_proof[1],
                        ])->save();
                    break;
                case 4:
                    $external = $request->external_id;
                    $user = $this->findbyid($external);
               
                    $user->fill([
                        'period_of_stay' => $request->currentAddress,
                        'residential_type' => $request->residentialType,
                        'address_type' => $request->addressProof,
                        'respondent_name_and_relation_with_candidate' => $request->submitdocument
                        ])->save();       
                    break;          
            }
    }
}