@if(session('success'))
        <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 4000)"
            class="fixed bottom-3 right-3 bg-blue-500 text-white rounded-xl py-4 px-8">
            {{ session('success') }}
        </div>
 @endif
