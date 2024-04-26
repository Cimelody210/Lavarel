<?php>
    namespace App\Http\Controller;

    use App\Model\Brand;
    use App\Model\Category;
    use App\Model\Order;
    use App\Model\Product;
    use Illuminate\Http\Request;
    use Illuminate\Support\Str;

    class AdminController extends Controller
    {
        public function dashboard(){
            return view('admin.page.dashboard');
        }
        public function deltaiOrder(Order $order) {
            return view('admin.page.details_order', compact("order"));
        }
        public function confirmOrder(Order $order) {
            $order->update(["status" = Order::STATUS_CONFIRMED]);
        }
        public function productSave(Request $request) {
            $request = validate([
                "name"=>"required",
                "price"=>"required | numeric| min:0",
                ""=>"",
            ])
        }
    }
</php>