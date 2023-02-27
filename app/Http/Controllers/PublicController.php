<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use DataTables;

class PublicController extends Controller
{

    public function getAdminPortal(){
        return view('admin_portal');
    }

    public function fileUpload(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => ['unique:files'],
            'file' => 'required'
        ]);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }

        $file = new File();
        $imageName = null;

        if ($request->hasFile('file')) {
            if(!$request->name){
                $imageName = time() . '-' . uniqid() . '.' . $request->file->extension();
            }else{
                $imageName = $request->name . '.' . $request->file->extension();
            }
            
            $request->file->move(public_path(getenv('FILE_UPLOAD_PATH')), $imageName);
            $file->name = $imageName;
            $file->url = getenv('APP_URL').getenv('FILE_UPLOAD_PATH').$imageName;
            $file->save();
        }

        return back()->with('success', 'File Uploaded Successfully...');
    }

    public function getFiles(Request $request){
        if ($request->ajax()) {
            $data = File::select('id','name','url')->get();
            return Datatables::of($data)->addIndexColumn()
                ->addColumn('action', function($row){
                    $btn = '<a class="btn btn-primary btn-sm" href="'.$row->url.'" download>Download</a>';
                    return $btn;
                })
                ->addColumn('delete', function($row){
                    $delete = '<a class="btn btn-danger btn-sm" href="'.route('delete.file',$row->id).'">Delete</a>';
                    return $delete;
                })
                ->rawColumns(['action','delete'])
                ->make(true);
        }

        return view('base_layout');
    }
    
    public function getPublicPortal(){
        return view('public_portal');
    }

    public function deleteFile($id){
        $file = File::findOrFail($id);
        $file->delete();

        return back()->with('success', 'File Deleted Successfully...');
    }

}