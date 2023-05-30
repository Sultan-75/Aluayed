<?php

namespace App\Http\Controllers;

use App\Models\DonationCategory;
use Illuminate\Http\Request;

class DonationCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_donation($id = '')
    {
        $allresult['data'] = DonationCategory::all();

        if ($id > 0) {
            $arr = DonationCategory::where(['id' => $id])->get();
            $result['category_name'] = $arr[0]->category_name;
            $result['id'] = $arr[0]->id;
        } else {
            $result['category_name'] = '';
            $result['id'] = 0;
        }
        return view('admin.donation_category', $result, $allresult);
    }
    public function manage_donation_process(Request $request)
    {
        if ($request->post('id') > 0) {
            $model = DonationCategory::find($request->post('id'));
            $msg = "Category Updated";
        } else {
            $model = new DonationCategory();
            $msg = "Category Inserted";
        }
        $model->category_name = $request->post('category_name');
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/category/manage_donation');
    }
    public function delete(Request $request, $id)
    {
        $model = DonationCategory::find($id);
        $model->delete();
        $request->session()->flash('message', 'Category Deleted');
        return redirect('admin/category/manage_donation');
    }
}
