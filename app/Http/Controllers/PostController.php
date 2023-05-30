<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $result['data'] = post::all();
        $result['data'] = Post::join('post_categories', 'post_categories.id', '=', 'posts.cat_id')
            ->get(['posts.*', 'post_categories.category_name']);
        return view('admin.posts', $result);
    }
    public function manage_post(Request $request, $id = '')
    {
        if ($id > 0) {
            $arr = Post::where(['id' => $id])->get();
            $result['post_name'] = $arr['0']->post_name;
            $result['cat_id'] = $arr['0']->cat_id;
            $result['image'] = $arr['0']->image;
            $result['post_details'] = $arr['0']->post_details;
            $result['id'] = $arr['0']->id;
        } else {
            $result['post_name'] = '';
            $result['cat_id'] = '';
            $result['image'] = '';
            $result['post_details'] = "";
            $result['product_scent'] = "";
            $result['id'] = 0;
        }
        $result['category'] = DB::table('post_categories')->get();
        return view('admin.manage_post', $result);
    }
    public function manage_post_process(Request $request)
    {
        if ($request->post('id') > 0) {
            $model = Post::find($request->post('id'));
            $msg = "Post Updated";
        } else {
            $model = new Post();
            $msg = "Post Created";
        }
        if ($request->hasfile('image')) {

            if ($request->post('id') > 0) {
                $arrImage = Post::where(['id' => $request->post('id')])->get();
                if (Storage::exists('/public/media/post/' . $arrImage[0]->image)) {
                    Storage::delete('/public/media/post/' . $arrImage[0]->image);
                }
            }

            $image = $request->file('image');
            $ext = $image->extension();
            $image_name = time() . '.' . $ext;
            $image->storeAs('/public/media/post', $image_name);
            $model->image = $image_name;
        }

        $model->post_name = $request->post('post_name');
        $model->cat_id = $request->post('cat_id');
        $model->post_details = $request->post('post_details');
        $model->save();
        $request->session()->flash('message', $msg);
        return redirect('admin/post');
    }
    public function delete(Request $request, $id)
    {
        $model = Post::find($id);
        Storage::delete("/public/media/post/" . $model->image);
        $model->delete();
        $request->session()->flash('message', 'Product deleted');
        return redirect('admin/post');
    }
}
