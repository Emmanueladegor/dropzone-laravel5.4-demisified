<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\products;
use Illuminate\Http\Request;


class productsController extends Controller
{
	public function storeProducts(Request $request)

	{

		$fileModel = new products;
		//add laravel server-side validation here:

		if ($request->hasFile('file')) {

			$filename = $request->file('file');
			//$this->validate($request,[
			//	'file' => 'required',
			//	'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
			//	]); Add laravel validate if you wish
			foreach ($filename as $n => $file) {
				$k= $n+1;
				$filenames = time().$k. $filename[$n]->getClientOriginalName();
				$fileModel->{"featuredImage".$k} = $filenames;
				$file->storeAs('public/uploads',$filenames);
			}
			$fileModel->save();

		}
	}


	public function deleteProducts($id) {
		$file = 'public/uploads/products/'.$id;

		Storage::delete($file);

		return 'Yup it worked!';

	}


}
