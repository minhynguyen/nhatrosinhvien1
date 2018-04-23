<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request){
 
		if($request->ajax())
		 
		{
 
			$output="";
 
			$products=DB::table('nhatro')->where('nt_ten','LIKE','%'.$request->search."%")
										->get();
 
			if($products)
 
			{
 
				foreach ($products as $key => $product) {
 
					$output.='<tr>'.
					'<td>'.$product->nt_ten.'</td>'.					 
					'<td>'.$product->nt_diachi.'</td>'.					 
					'<td>'.$product->nt_trangthai.'</td>'.					 
					'<td>'.$product->nt_ma.'</td>'.					 
					'</tr>';
 
				}
				return Response($output);			
			}
		}
	}
}	
