<?php

namespace App\Http\Controllers;

use App\Category;
use App\Collection;
use App\Http\Requests\StoreProductRequest;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Session;
use DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $limit = 10;
        $list_obj = Product::where('status', 1)->orderBy('created_at', 'DESC')->paginate($limit);
        return view('admin.product.list')->with('list_obj', $list_obj);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        $collection = Collection::all();
        return view('admin.product.form',compact('category','collection'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $request->validated();
        $obj = new Product();
        $obj->categoryId = Input::get('categoryId');
        $obj->collectionId = Input::get('collectionId');
        $obj->name = Input::get('name');
        $obj->images = Input::get('images');
        $obj->price = Input::get('price');
        $obj->discount = Input::get('discount');
        $obj->description = Input::get('description');
        $obj->detail = Input::get('detail');
        $obj->colors = Input::get('colors');
        $obj->sizes = Input::get('sizes');
        $obj->save();
        Session::flash('message', 'Thêm mới thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/product');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $obj = Product::find($id);
        if ($obj == null){
            return view('error.404');
        }
        return view('admin.product.show')->with('obj',$obj);
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obj = Product::find($id);
        if ($obj == null || $obj->status != 1) {
            return view('error.404');
        }
        return view('admin.product.edit')->with('obj', $obj);
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
        $obj = Product::find($id);
        $validate_unique = '';
        if ($obj->name != $request->get('name')) {
            $validate_unique = '|unique:products';
        }
        $request->validate([
            'categoryId' => 'required',
            'collectionId' => 'required',
            'name' => 'required|max:50|min:10' . $validate_unique,
            'images' => 'required',
            'price' => 'required',
            'description' => 'required',
            'detail' => 'required',
            'colors' => 'required',
            'sizes' => 'required'
        ],
            [
                'categoryId.required'=>'Vui lòng nhập mã danh mục',
                'collectionId.required'=>'Vui lòng nhập mã bộ sưu tập',
                'name.required' => 'Vui lòng nhập tên cho sản phẩm.',
                'name.min' => 'Tên quá ngắn, vui lòng nhập ít nhất 10 ký tự.',
                'name.max' => 'Tên quá dài, vui lòng nhập nhiều nhất 50 ký tự.',
                'name.unique' => 'Tên đã được sử dụng, vui lòng chọn tên khác.',
                'images.required' => 'Vui lòng nhập ảnh cho sản phẩm',
                'price.required' => 'Vui lòng nhập giá cho sản phẩm',
                'description.required' => 'Vui lòng nhập mô tả cho sản phẩm',
                'detail.required' => 'Vui lòng nhập chi tiết cho sản phẩm',
                'colors.required' => 'Vui lòng nhập màu cho sản phẩm',
                'sizes.required' => 'Vui lòng nhập cỡ cho sản phẩm',
            ]);

        if ($obj == null || $obj->status != 1) {
            return view('error.404');
        }
        $obj->categoryId = $request->get('categoryId');
        $obj->collectionId = $request->get('collectionId');
        $obj->name = $request->get('name');
        $obj->images = $request->get('images');
        $obj->price = $request->get('price');
        $obj->discount = $request->get('discount');
        $obj->description = $request->get('description');
        $obj->detail = $request->get('detail');
        $obj->colors = $request->get('colors');
        $obj->sizes = $request->get('sizes');
        $obj->save();
        Session::flash('message', 'Sửa thành công');
        Session::flash('message-class', 'alert-success');
        return redirect('/admin/product');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obj = Product::find($id);
        if ($obj == null) {
            return response()->json(['message' => 'Sản phẩm không tồn tại hoặc đã bị xóa'], 404);
        }
        $obj->status = 0;
        $obj->save();
        return response()->json(['message' => 'Xóa sản phẩm thành công']);
    }
    public function timkiem(Request $request)
    {
        $products = Product::where('name', 'like', '%' . $request->tukhoa . '%')
            ->
            orWhere('description', 'like', '%' . $request->tukhoa . '%')
            ->
            get();
        return view('admin.product.timkiem', compact('products'));
    }
    public function __construct() {
        $this->middleware('auth');
    }
}
