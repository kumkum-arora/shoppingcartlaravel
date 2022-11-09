<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\login;
use App\Models\contactus;
use App\Models\product;
use App\Models\cart;
use App\Models\categories;
use session;

class Icontroller extends Controller
{
    // function for displaying login page
    public function display_login()
    {
        return view("login");
    }

    // function for register new account
    public function sign_submit(Request $request)
    {
        $add = new login;
        if ($request->isMethod('post')) {
            $add->fname = $request->get('fname');
            $add->email = $request->get('email');
            $add->password = $request->get('pass');
            $add->save();
        }
        return redirect("login");
    }

    // function for login user
    public function login_submit(Request $request)
    {
        $username = $request->get('uname');
        $password = $request->get('password');
        $match = login::select('*')->where('email', $username)->where('password', $password)
            ->first();
        if ($match) {
            $request->Session()->put('user', $match->id);
            $request->Session()->put('uname', $username);
            // echo session('user');
            return redirect("index");
        }
    }

    // function for logout user
    public function logout()
    {
        Session()->flush('user');
        return redirect('login');
    }

    // function for displaying index page
    public function display_index()
    {
        $data = product::paginate();
        $category = categories::paginate();
        return view('index', compact('category', 'data'));
    }

    // functions for contactus page
    public function display_contact()
    {
        return view("contactus");
    }
    public function contact_submit(Request $request)
    {
        $add = new contactus;
        if ($request->isMethod('post')) {
            $add->fullname = $request->get('fullname');
            $add->email = $request->get('email');
            $add->message = $request->get('message');
            $add->save();
        }
        return redirect("contactus")->with('success', 'message entered successfully');
    }

    // function for displaying products according to the categories
    public function display_dishwasher($id)
    {
        $category = categories::paginate();
        $categorydata = categories::where('id', $id)->get();
        $data = product::where('categoryid', $id)->get();
        return view('dishwasher', compact('data', 'categorydata', 'category'));
    }

    // functions for displaying all products
    public function display_allproducts()
    {
        $category = categories::paginate();
        $allproduct = product::paginate();
        return view('allproducts', compact('allproduct', 'category'));
    }

    // for buy a product
    public function buynow($id)
    {
        $oneproduct = product::where('id', $id)->get();
        return view('addtocart', compact('oneproduct'));
    }

    // search product
    public function search_submit(Request $request)
    {
        $category = categories::paginate();
        if ($request->isMethod('post')) {
            $search = $request->get('search');
            $data = product::where('productname', 'LIKE', '%' . $search . '%')->paginate();
        }
        return view('index', compact('data', 'category'));
    }

    // for add product in cart
    public function addtocart(Request $request)
    {
        $add = new cart;
        if ($request->isMethod('post')) {
            $add->login_id = $request->get('userid');
            $add->product_id = $request->get('pid');
            $add->price = $request->get('price');
            $add->qty = $request->get('qty');
            $add->total = $request->get('price') * $request->get('qty');
            $add->save();
        }
        return redirect("checkout");
    }
    // delete cart items
    public function delete_cart($id)
    {
        $ob = cart::find($id);
        $ob->delete();
        return redirect("checkout");
    }

    // function for showing data of login user
    public function checkout(Request $request)
    {
        $uid = session('user');
        $ptotal = cart::where('login_id', $uid)->get()->sum('total');
        $qtotal = cart::where('login_id', $uid)->get()->sum('qty');
        $cart = cart::where('login_id', $uid)->with('product')->with('login')->get();
        // $cart = login::with('cart')->get();
        // dd($cart->toArray());
        return view('checkout', compact('cart', 'ptotal', 'qtotal'));
    }
}
