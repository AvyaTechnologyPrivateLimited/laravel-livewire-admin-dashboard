<div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="relative overflow-x-auto sm:rounded-lg">
                        <div class="flex justify-between mb-2">
                        <h1 class="text-lg">Customer</h1>
                        <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create New Customer</button>
                        </div>

@if($isOpen)
    @include('livewire.customer.create')
@endif

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Name
                </th>
                <th scope="col" class="px-6 py-3 bg-gray-50">
                    Email
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
            @foreach($customers as $customer)
            <tr class="border-b border-gray-200 dark:border-gray-700">
                <td class="px-6 py-4">
                    {{$customer->name}}
                </th>
                <td class="px-6 py-4">
                    {{$customer->email}}
                </td>
                <td class="px-6 py-4">
                    {{$customer->created_at->format('Y-d-m')}}
                </td>
                <td class="px-6 py-4">
                    <button wire:click="edit({{ $customer->id }})" class="btn btn-primary btn-sm mr-2"><i class="fa fa-pencil"></i></button>
                    <button wire:click="delete({{ $customer->id }})" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></button>
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