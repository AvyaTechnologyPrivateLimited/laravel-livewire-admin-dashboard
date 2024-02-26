<div>
    <button wire:click="create()" class="btn btn-success">Create New Customer</button>
    @if($isOpen)
        @include('livewire.create')
    @endif
    <table class="table table-bordered mt-5">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Email</th>
            <th width="150px">Action</th>
        </tr>
        @foreach($customers as $customer)
            <tr>
                <td>{{ $customer->id }}</td>
                <td>{{ $customer->name }}</td>
                <td>{{ $customer->email }}</td>
                <td>
                    <button wire:click="edit({{ $customer->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $customer->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
        @endforeach
    </table>
</div>
