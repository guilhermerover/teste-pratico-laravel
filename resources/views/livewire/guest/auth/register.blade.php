<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="absolute z-10">
        @livewire('layouts.guest.header')
    </div>
    <div class="w-screen h-screen dark:bg-gray-900">
        <div class="h-full flex items-center justify-center p-2">
            <form method="post" wire:submit.prevent="create" class="w-full md:w-6/12 lg:w-5/12 xl:w-4/12 rounded-lg shadow-md border p-6" @user-registered.window="document.getElementById('name').value = null, document.getElementById('email').value = null, document.getElementById('password').value = null">
                <h2 class="mb-8 text-3xl text-center text-gray-700 dark:text-white">{{__('content.guest-register-register')}}</h2>
                <div class="relative border-b-2 mb-8">
                    <input wire:model="name" type="text" name="name" id="name" placeholder=" " autocomplete="off" autofocus class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="name" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        {{__('content.guest-register-name')}}
                    </label>
                </div>
                <div class="relative border-b-2 mb-8">
                    <input wire:model="email" type="text" name="email" id="email" placeholder=" " autocomplete="off" class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="email" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        {{__('content.guest-register-email')}}
                    </label>
                </div>
                <div class="relative border-b-2 mb-4">
                    <input wire:model="password" type="password" id="password" name="password" placeholder=" " autocomplete="off" class="block w-full appearance-none focus:outline-none focus:ring-0 border-b border-t-0 border-l-0 border-r-0 border-blue-500 bg-transparent dark:text-white"/>
                    <label for="password" class="absolute top-2 left-3 duration-300 origin-0 text-gray-700 dark:text-white">
                        {{__('content.guest-register-password')}}
                    </label>
                </div>
                <button type="submit" class="w-full text-xl p-2 text-gray-900 bg-blue-500 ring-blue-300 ring-2 transition duration-150 hover:bg-blue-400 hover:text-gray-800 dark:bg-blue-900 dark:ring-blue-400 dark:text-gray-100">
                    {{__('content.guest-register-register')}}
                </button>
            </form>
        </div>
    </div>
</div>
