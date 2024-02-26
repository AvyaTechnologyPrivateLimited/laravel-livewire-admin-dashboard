<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Customer as CustomerModel;

class Customer extends Component
{
    public $customers, $name, $email, $selectedCustomerId;
    public $isOpen = 0;

    public function render()
    {
        $this->customers = CustomerModel::all();
        return view('livewire.customer.index');
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
        $this->name = '';
        $this->email = '';
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        CustomerModel::updateOrCreate(['id' => $this->selectedCustomerId], [
            'name' => $this->name,
            'email' => $this->email
        ]);

        session()->flash('message',
            $this->selectedCustomerId ? 'Customer Updated Successfully.' : 'Customer Created Successfully.');

        $this->closeModal();
        $this->resetInputFields();
    }

    public function edit($id)
    {
        $customer = CustomerModel::findOrFail($id);
        $this->selectedCustomerId = $id;
        $this->name = $customer->name;
        $this->email = $customer->email;

        $this->openModal();
    }

    public function delete($id)
    {
        CustomerModel::find($id)->delete();
        session()->flash('message', 'Customer Deleted Successfully.');
    }
}