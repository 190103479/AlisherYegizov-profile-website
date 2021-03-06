<?php

namespace App\Http\Controllers;
use App\Models\Item;
use App\Models\ItemDetails;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index(){
        $person =Item::all();
        return view('forms.index')->with(['person' => $person]);
    }
    
    
    public function uploadForm(){
    return view('forms.upload_form');
}

  public function uploadSubmit(Request $request){
      $this -> validate($request, [
          'name' => 'required',
          'surname' => 'required',
          'email' => 'required',
          'photos' => 'required',
      ]);
      if($request-> hasFile('photos')){
          $allowedfileExtension=['pdf','jpg','png','docx'];
          $files = $request->file('photos');
          foreach($files as $file){
              $filename = $file->getClientOriginalName();
              $extension = $file->getClientOriginalExtension();
              $check = in_array($extension,$allowedfileExtension);
              if($check){
                  $items = Item::create($request->all());
                  foreach($request->photos as $photo){
                      $filename = $photo->store('photos');
                      ItemDetails::create([
                          'item_id'=>$items->id,
                          'filename'=>$filename
                      ]);
                  }
                  echo "Upload Successfully";
              }
              else{
                  echo '<div class="alert alert-warning"><strong>
                  Warning!</strong> Sorry Only Upload imgs</div>';
              }
          }
      }
  }
}
