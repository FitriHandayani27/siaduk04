<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
@csrf
</form>
<div id="sidebar" class="bg-white fixed top-0 bottom-0 lg:left-0 p-2 w-[300px] overflow-y-auto text-center bg-[#3FD56] transform -translate-x-full transition-transform duration-300">
    <div class="text-gray-100 text-xl mt-8">
        <div class="p-2.5 mt-1 flex items-center">
            <h1 class="font-bold text-gray-200 text-16px ml-3">{{ $slot }}</h1>
        </div>
        <hr class="my-2 text-gray-600">
        <a href="#" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-black hover:text-white">
            <i class="fa-solid fa-house"></i>
            <span class="text-[15px] ml-4">Home</span>
        </a>
        <a href="#" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-black hover:text-white">
            <i class="fa-solid fa-users"></i>
            <span class="text-[15px] ml-4">Dashboard</span>
        </a>
        <hr class="my-2 text-gray-600">
        <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer hover:bg-blue-600 text-black hover:text-white">
            <i class="fa-solid fa-right-from-bracket"></i>
            <span class="text-[15px] ml-4">Log out</span>
        </a>
    </div>
</div>



<script>
    function toggleSidebar() {
      const sidebar = document.getElementById("sidebar");
      const navbarLeft = document.getElementById("navbar-left");
      const mainContent = document.getElementById("main-content");

      sidebar.classList.toggle("-translate-x-full"); // Show/hide sidebar

      if (!sidebar.classList.contains("-translate-x-full")) {
        navbarLeft.style.marginLeft = "300px";
        mainContent.style.marginLeft = "300px"; // Geser konten utama
      } else {
        navbarLeft.style.marginLeft = "0";
        mainContent.style.marginLeft = "0"; // Kembalikan konten utama ke posisi awal
      }
    }
    </script>



