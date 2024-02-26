<div>
    @if($isOpen)
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" wire:click="closeModal()">&times;</span>
            <p>Create Order</p>

            <form>
                <div class="mb-4">
                    <label for="customer_id" class="block text-sm font-bold mb-2">Customer</label>
                    <select type="text" wire:model="customer_id" id="customer_id" class="mt-1 block w-full inputtext">
                        <option>Select</option>
                        @foreach($customers as $customer)
                            <option value="{{$customer->id}}">{{$customer->name}}</option>
                        @endforeach
                    </select>
                    @error('customer') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>
                <div class="mb-4">
                    <label for="order_num" class="block text-sm font-bold mb-2">Order Number</label>
                    <input type="order_num" wire:model="order_num" id="order_num" class="mt-1 block w-full inputtext" />
                    @error('order_num') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    <label for="product_name" class="block text-sm font-bold mb-2">Select Product</label>
                    <select wire:model="product_name" id="product_name" class="mt-1 block w-full inputtext">
                        <option>Select</option>
                        <option value="T-Shirt">T-Shirt</option>
                        <option value="Shirt">Shirt</option>
                        <option value="Paint">Paint</option>
                        <option value="Watch">Watch</option>
                    </select>
                    @error('product_name') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-bold mb-2">Quantity</label>
                    <select wire:model="quantity" id="quantity" class="mt-1 block w-full inputtext">
                        <option>Select</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                    @error('quantity') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                <div class="mb-4">
                    <label for="price" class="block text-sm font-bold mb-2">Price</label>
                    <input type="number" wire:model="price" id="price" class="mt-1 block w-full inputtext" />
                    @error('price') <span class="text-red-500">{{ $message }}</span>@enderror
                </div>

                
            <button @click="showModal = false" wire:click="store" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>
            </form>

        </div>
    </div>
    <div class="modal-overlay" wire:click="closeModal()"></div>
    @endif
</div>
