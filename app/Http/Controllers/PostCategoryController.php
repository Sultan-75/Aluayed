<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_post($id = '')
    {
        $allresult['data'] = PostCategory::all();

        if ($id > 0) {
            $arr = PostCategory::where(['id' => $id])->get();
            $result['category_name'] = $arr[0]->category_name;
            $result['id'] = $arr[0]->id;
        } else {
            $result['category_name'] = '';
            $result['id'] = 0;
        }
        return view('admin.post_category', $result, $allresult);
    }
    public function manage_post_process(Request $request)
    {
        if ($request->post('id') > 0) {
            $model = PostCategory::find($request->post('id'));
            $msg = "Category Updated";
        } else {
            $model = new PostCategory();
            $msg = "Category Inserted";
        }
        $model->category_name = $request->post('category_name');
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/category/manage_post');
    }
    public function delete(Request $request, $id)
    {
        $model = PostCategory::find($id);
        $model->delete();
        $request->session()->flash('message', 'Category Deleted');
        return redirect('admin/category/manage_post');
    }
}
