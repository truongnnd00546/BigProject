<?php

namespace App\Http\Controllers;

use App\Collection;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\StoreCollectionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 0;
        $list_obj = Collection::where('status', 1)->orderBy('created_at', 'DESC')->paginate($limit);
        return view('admin.collection.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collection.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCollectionRequest $request)
    {
        $request->validated();
        $obj = new Collection();
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->save();
        Session::flash('message', 'Thêm mới thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/collection');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Collection::find($id);
        if ($obj == null){
            return view('error.404');
        }

        return view('admin.collection.show')->with('obj',$obj);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Collection::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('error.404');
        }
        return view('admin.collection.edit')->with('obj', $obj);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $obj = Collection::find($id);
        $validate_unique = '';
        if ($obj->name != $request->get('name')) {
            $validate_unique = '|unique:collections';
        }
        $request->validate([
            'name' => 'required|max:50|min:10' . $validate_unique,
            'description' => 'required',
            'thumbnail' => 'required'
        ],
            [
                'name.required' => 'Vui lòng nhập tên danh mục.',
                'name.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 10 ký tự.',
                'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
                'name.unique' => 'Tên đã được sử dụng, vui lòng chọn tên khác.',
                'description.required' => 'Vui lòng nhập mô tả cho danh mục',
                'thumbnail.required' => 'Vui lòng nhập ảnh đại diện cho danh mục',
            ]);

        if ($obj == null || $obj->status != 1) {
            return view('error.404');
        }
        $obj->name = $request->get('name');
        $obj->description = $request->get('description');
        $obj->thumbnail = $request->get('thumbnail');
        $obj->save();
        Session::flash('message', 'Sửa thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/collection');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Collection::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Bộ sưu tập không tồn tại hoặc đã bị xóa'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Xóa bộ sưu tập thành công']);
    }
    public function __construct() {
        $this->middleware('auth');
    }
}
