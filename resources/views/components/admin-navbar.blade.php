<div class="bg-white shadow-md p-4 fixed w-full z-20 flex items-center justify-between h-16">
    <div class="flex items-center space-x-2">
        <img src="{{ asset('images/Group_18-removebg-preview.png') }}" alt="Logo Toko" class="h-20 w-auto mr-2 object-contain">
    </div>
    <div class="flex items-center space-x-2">
        <img src="{{ asset('images/pngtree-blue-washing-machine-for-laundry-logo-png-image_6114594.png') }}" alt="Laundry Logo" class="w-10 h-10 object-contain">
        <a href="{{ route('admin.profile.show') }}" class="nav-link text-black hover:text-gray-700">
            @auth
                {{ Auth::user()->username }}
            @else
                Guest
            @endauth
        </a>
        

    </div>
</div>