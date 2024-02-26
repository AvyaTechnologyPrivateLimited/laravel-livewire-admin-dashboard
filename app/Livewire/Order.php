<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Order as OrderModel;
use App\Models\Customer;

class Order extends Component
{
    public $orders, $customer_id, $order_num, $price, $product_name, $quantity, $selectedOrderId, $customers;
    public $isOpen = 0;

    public function render()
    {
        $this->orders = OrderModel::all();
        $this->customers = Customer::all();
        return view('livewire.order.index');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields(){
        $this->customer_id = '';
        $this->order_num = '';
        $this->price = '';
        $this->product_name = '';
        $this->quantity = '';
    }

    public function store()
    {
        $this->validate([
            'price' => 'required',
            'product_name' => 'required',
            'quantity' => 'required',
        ]);

        OrderModel::updateOrCreate(['id' => $this->selectedOrderId], [
            'customer_id' => $this->customer_id,
            'order_num' => $this->order_num,
            'price' => $this->price,
            'product_name' => $this->product_name,
            'quantity' => $this->quantity
        ]);

        session()->flash('message',
            $this->selectedOrderId ? 'Order Updated Successfully.' : 'Order Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $order = OrderModel::findOrFail($id);
        $this->selectedOrderId = $id;
        $this->customer_id = $order->customer_id;
        $this->order_num = $order->order_num;
        $this->price = $order->price;
        $this->product_name = $order->product_name;
        $this->quantity = $order->quantity;

        $this->openModal();
    }

    public function delete($id)
    {
        OrderModel::find($id)->delete();
        session()->flash('message', 'Order Deleted Successfully.');
    }
}