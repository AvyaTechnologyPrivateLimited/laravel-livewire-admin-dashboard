<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <div class="flex justify-between mb-2">
                        <h1 class="text-lg">Order</h1>
                        <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Order</button>
                        </div>

@if($isOpen)
    @include('livewire.order.create')
@endif

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Customer
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Order Number
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Price
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Product Name
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Quantity
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Created At
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Action
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach($orders as $order)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{$order->customer->name??null}}
                </th>
                <td class="px-6 py-4">
                    {{$order->order_num}}
                </td>
                <td class="px-6 py-4">
                    {{$order->price}}
                </td>
                <td class="px-6 py-4">
                    {{$order->product_name}}
                </td>
                <td class="px-6 py-4">
                    {{$order->quantity}}
                </td>
                <td class="px-6 py-4">
                    {{$order->created_at->format('Y-d-m')}}
                </td>
                <td class="px-6 py-4">
                    <button wire:click="edit({{ $order->id }})" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></button>
                </td>
            </tr>
           @endforeach
        </tbody>
    </table>
</div>
                </div>
            </div>
        </div>
    </div>