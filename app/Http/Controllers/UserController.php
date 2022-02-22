<?php
namespace App\Http\Controllers;
   

use Illuminate\Http\Request;
use App\Models\User;
use Ramsey\Uuid\Uuid;
use PDF;
use \Exception;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Storage;
use File;
use DB;

class UserController extends Controller
{
    public function findbyid($id){
        return User::where('external_id',$id)->first();
    }
    public function ajaxRequestPost(Request $request){
            $step = $request->step;
          
            switch($step){
                case 1:
                    $external = Uuid::uuid4()->toString();
                    $user = (new User)->forceFill([
                            'external_id' => $external,
                            'actual_data_lat' => $request->lat,
                            'actual_data_long' => $request->log]);
                    $user->save();
                    return $external;
                    break;
                case 3:
                    $external = $request->external_id;
                    $fileName = $request->file->getClientOriginalName();  
                    $path =  $request->file->move(public_path('uploads'), $fileName);
                    $selfie_path = explode("\public",$path);
                    $user = $this->findbyid($external);
                    $user->fill(['selfie_path' => $selfie_path[1]])->save();
                    break;
                case 4:
                    $external = $request->external_id;
                    $fileName = $request->file->getClientOriginalName();  
                    $path =  $request->file->move(public_path('uploads'), $fileName);
                    $addressProof = explode("\public",$path);
                    $user = $this->findbyid($external);
                    $user->fill([
                         'addr_proof' => $addressProof[1],
                        ])->save();
                    break;
                case 5:
                    $external = $request->external_id;
                    $fileName = $request->file->getClientOriginalName();  
                    $path =  $request->file->move(public_path('uploads'), $fileName);
                    $id_proof = explode("\public",$path);
                    $user = $this->findbyid($external);
                    $user->fill([
                        'id_proof' => $id_proof[1],
                        ])->save();
                    break;
                case 6:
                    $external = $request->external_id;
                    $user = $this->findbyid($external);
                    $user->fill([
                        'period_of_stay' => $request->currentAddress,
                        'residential_type' => $request->residentialType,
                        'address_type' => $request->addressProof,
                        'respondent_name_and_relation_with_candidate' => $request->submitdocument
                        ])->save();       
                    break;        
                case 7:  
                    
                    $external = $request->external_id;
                    $user = $this->findbyid($external);
                 
                    $signed = $request->input('data');
             
                    $folderPath = public_path('uploads/');
        
                    $image_parts = explode(";base64,", $signed);
                          
                    $image_type_aux = explode("image/", $image_parts[0]);
                    
                    $image_type = $image_type_aux[1];
                       
                    $image_base64 = base64_decode($image_parts[1]);
                       
                    $file = $folderPath . uniqid() . '.'.$image_type;
                    file_put_contents($file, $image_base64);
                  
                    $user->fill([
                      'signature' =>  $file,
                        ])->save();   
               
                    $pdf = User::where('external_id',$external)->first();
                    return $pdf;
                    break;  
            }
    }
    public function pdfgenerate(Request $request){
       $user =$request->resp;
        $external = $request->resp['external_id'];
     
        $customPaper = array(0,0,900.00,1400.00);
        $pdf = PDF::loadView('userPdf',['user' => $user])->setPaper($customPaper, 'square');
        
        $path = public_path('pdf/');
        $fileName =  time().'.'. 'pdf' ;
        $pdf->save($path . '/' . $fileName);

        $pdf = public_path('pdf/'.$fileName);
        $user = $this->findbyid($external);
       // dd($user);
        $user->fill([
            'pdf_path' =>  $pdf,
              ])->save();   
        return response()->download($pdf);
    }
}