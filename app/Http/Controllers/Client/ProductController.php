<?php
/**
 * Created by PhpStorm.
 * User: xuanhung
 * Date: 8/21/18
 * Time: 6:56 PM
 */

namespace App\Http\Controllers\Client;


use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use App\Collection;
use App\User;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class ProductController extends Controller
{
    public function index()
    {
        $list_1 = Product::where('categoryId', 1)->where('status',1)->orderBy('created_at', 'DESC')->paginate(8);
        $list_2 = Product::where('categoryId', 2)->where('status',1)->orderBy('created_at', 'DESC')->paginate(8);
        $list_3 = Product::where('categoryId', 3)->where('status',1)->orderBy('created_at', 'DESC')->paginate(8);
        $list_4 = Product::where('categoryId', 4)->where('status',1)->orderBy('created_at', 'DESC')->paginate(8);
        $list_5 = Product::where('categoryId', 5)->where('status',1)->orderBy('created_at', 'DESC')->paginate(8);
        $collections = Collection::where('status', 1)->get();
        return view('client.home', compact('list_1', 'list_2', 'list_3', 'list_4', 'list_5', 'collections'));
    }

    public function getListProduct()
    {
        $categories = Category::where('status', 1)->get();
        $selected_categoryId = 0;
        $product_filter = Product::where('status', 1);
        if (Input::has('categoryId') && Input::get('categoryId') != 0) {
            $selected_categoryId = Input::get('categoryId');
            $product_filter = $product_filter->where('categoryId', $selected_categoryId);
        }
        $selected_category = Category::find($selected_categoryId);
        $list_product = $product_filter->orderBy('created_at', 'DESC')->paginate(12);
        return view('client.product-list')
            ->with('categories', $categories)
            ->with('list_product', $list_product)
            ->with('selected_categoryId', $selected_categoryId)
            ->with('selected_category', $selected_category);
    }

    public function getListColleciton()
    {
        $selected_collectionId = 0;
        $product_filter = Product::where('status', 1);
        if (Input::has('collectionId') && Input::get('collectionId') != 0) {
            $selected_collectionId = Input::get('collectionId');
            $product_filter = $product_filter->where('collectionId', $selected_collectionId);
            $collections_type = Collection::where('id', $selected_collectionId)->first();
        }
        $list_collection = $product_filter->orderBy('created_at', 'DESC')->paginate(16);
        return view('client.collection')
            ->with('list_collection', $list_collection)
            ->with('selected_collectionId', $selected_collectionId)
            ->with('collections_type', $collections_type)
        ;
    }

    public function getSearch(Request $request)
    {
        $product = Product::where('name', 'like', '%' . $request->key . '%')
            ->
            orWhere('description', 'like', '%' . $request->key . '%')
            ->
            get();
//           $category = Category::where('name', 'like', '%' . $request->key . '%')
//            ->orWhere('', $request->key)
//               ->get();
        return view('client.search', compact('product'));
    }

    public function getSignIn()
    {
        return view('client.login');
    }

    public function postSignIn(Request $request)
    {
        $request->validate(
            [
                'email' => 'required|max:50|min:10|unique:users|email',
                'password' => 'required|max:20|min:6'
            ],
            [
                'email.required' => 'Vui lòng nhập Email',
                'email.max' => 'Email không quá 50 ký tự',
                'email.min' => 'Email phải dài hơn 10 ký tự',
                'email.unique' => 'Email đã được sử dụng, vui lòng nhập đúng email',
                'email.email' => 'Không đúng định dạng email',
                'password.required' => 'Vui lòng nhập password',
                'password.max' => 'Password không quá 20 ký tự',
                'password.min' => 'Password phải dài hơn 6 ký tự'
            ]);
        $credentials = array('email' => $request->email, 'password' => $request->password);
        if (Auth::attempt($credentials)) {
            return redirect()->back()->with(['flag' => 'success', 'message' => 'Đăng nhập thành công']);
        } else {
            return redirect()->back()->with(['flag' => 'danger', 'message' => 'Đăng nhập thất bại']);
        }
    }

    public function getSignUp()
    {
        return view('client.register');
    }

    public function postSignUp(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20|min:6|unique:users',
            'email' => 'required|max:50|min:10|unique:users|email',
            'password' => 'required|max:20|min:6',
            'confirmPassword' => 'required|max:20|min:6|same:password'
        ], [
            'name.required' => 'Vui lòng nhập tên người dùng',
            'name.max' => 'Tên không được quá 50 ký tự',
            'name.min' => 'Tên phải dài hơn 10 ký tự',
            'name.unique' => 'Tên đã được sử dụng, vui lòng nhập tên khác',
            'email.required' => 'Vui lòng nhập Email',
            'email.max' => 'Email không quá 20 ký tự',
            'email.min' => 'Email phải dài hơn 6 ký tự',
            'email.unique' => 'Email đã được sử dụng, vui lòng nhập đúng email',
            'email.email' => 'Email không đúng định dạng',
            'password.required' => 'Vui lòng nhập password',
            'password.max' => 'Password không quá 20 ký tự',
            'password.min' => 'Password phải dài hơn 6 ký tự',
            'confirmPassword.required' => 'Vui lòng nhập lại password',
            'confirmPassword.same' => 'Password không trùng nhau, vui lòng nhập lại',
        ]);
        $users = new User();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = Hash::make($request->password);
        $users->save();
        return redirect()->back()->with('thanhcong', 'Tạo tài khoản thành công!');
    }

    public function getLogOut()
    {
        Auth::logout();
        return redirect('/home');
    }

    public function show()
    {
        $id = Input::get('id');
        $obj = Product::find($id);
        if ($obj == null) {
            return "Lỗi";
        }
        return view('client.detailProduct', compact('obj'));
    }
}
