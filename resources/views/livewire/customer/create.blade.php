<div>
    @if($isOpen)
    <div id="myModal" class="modal">
        <div class="modal-content">
            <span class="close" wire:click="closeModal()">&times;</span>
            <p>Create Customer</p>

            <form>
                                    <div class="mb-4">
                                        <label for="name" class="block text-sm font-bold mb-2">Name</label>
                                        <input type="text" wire:model="name" id="name" class="mt-1 block w-full inputtext" />
                                        @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-bold mb-2">Email</label>
                                        <input type="email" wire:model="email" id="email" class="mt-1 block w-full inputtext" />
                                        @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
{{-- 
                                    <div class="mb-4">
                                        <label for="password" class="block text-sm font-bold mb-2">Password</label>
                                        <input type="password" wire:model="password" id="password" class="mt-1 block w-full inputtext" />
                                        @error('password') <span class="text-red-500">{{ $message }}</span>@enderror
                                    </div>
 --}}
                                </form>
                                
                    <button @click="showModal = false" wire:click="store" type="button" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Submit</button>

        </div>
    </div>
    <div class="modal-overlay" wire:click="closeModal()"></div>
    @endif
</div>
