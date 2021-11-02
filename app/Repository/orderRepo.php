<?php
namespace App\Repository;
use App\Models\order;
class orderRepo
{
    public $orderModel;
    public function __construct(order $orderModel)
    {
        $this->orderModel = $orderModel;
    }
    public function saveorder($order_name,$order_time,$order_status)
    {
        $this->orderModel->name=$order_name;
        $this->orderModel->Time=$order_time;
        $this->orderModel->status=$order_status;
        $this->orderModel->category=$order_cat;
        $this->orderModel->save();
    }
    public function fetchOrder($order_cat) {
        $data = $this->orderModel->where('category',$order_cat)->get();
        return json_decode($data);
    }
}  