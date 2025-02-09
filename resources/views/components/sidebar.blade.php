<div id="drawer-navigation"
    class="fixed top-0 left-0 z-40 w-64 h-screen p-4 custom-scrollbar overflow-y-auto transition-transform -translate-x-full bg-[#099AA7]"
    tabindex="-1" aria-labelledby="drawer-navigation-label">

   {{-- Judul & icon --}}
   <div class="flex items-center">
      <a href="https://erp.itnh.systems"
         class="flex gap-x-2 p-2 justify-center items-center focus:ring-2 focus:ring-gray-300 rounded-lg font-bold text-white group">
         <img class="w-[50px] bg-white p-2 rounded-lg group-hover:bg-gray-300" src="{{ asset('images/nhlogo.png') }}"
            alt="Logo">
         <span class="group-hover:text-gray-300">Manajemen PO</span>
      </a>

      <button
         class="text-white hover:text-gray-300 focus:ring-2 focus:ring-gray-300 font-medium rounded-lg text-sm focus:outline-none "
         type="button" data-drawer-hide="drawer-navigation" aria-controls="drawer-navigation">
         <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
            fill="none" viewBox="0 0 24 24">
            <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="M5 7h14M5 12h14M5 17h10" />
         </svg>
      </button>
   </div>

   {{-- Sidebar Menu --}}
   <div class="py-4 overflow-y-auto">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="/"
               class="flex items-center p-2 rounded-lg hover:bg-gray-100 group {{ request()->is('/') ? 'bg-white text-[#099AA7]' : 'text-white' }}">
               <svg class="w-5 h-5 transition duration-75 group-hover:text-[#099AA7]" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                  <path d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                  <path d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
               </svg>
               <span class="ms-3 whitespace-nowrap group-hover:text-[#099AA7]">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="/order"
               class="flex items-center p-2 rounded-lg hover:bg-gray-100 group {{ request()->is('/order') ? 'bg-white text-[#099AA7]' : 'text-white' }}">
               <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z" clip-rule="evenodd"/>
                </svg>                
               <span class="ms-3 whitespace-nowrap group-hover:text-[#099AA7]">Order</span>
            </a>
         </li>
         <li>
            <a href="/harga"
               class="flex items-center p-2 rounded-lg hover:bg-gray-100 group {{ request()->is('/harga') ? 'bg-white text-[#099AA7]' : 'text-white' }}">
               <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                </svg>
                
               <span class="ms-3 whitespace-nowrap group-hover:text-[#099AA7]">Harga</span>
            </a>
         </li>
         <li>
            <a href="/stock"
               class="flex items-center p-2 rounded-lg hover:bg-gray-100 group {{ request()->is('stock') ? 'bg-white text-[#099AA7]' : 'text-white' }}">
               <svg class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-[#099AA7]"
                  aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                  fill="none" viewBox="0 0 24 24">
                  <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                     d="M15 4h3a1 1 0 0 1 1 1v15a1 1 0 0 1-1 1H6a1 1 0 0 1-1-1V5a1 1 0 0 1 1-1h3m0 3h6m-3 5h3m-6 0h.01M12 16h3m-6 0h.01M10 3v4h4V3h-4Z" />
               </svg>
               <span class="ms-3 whitespace-nowrap group-hover:text-[#099AA7]">Stock</span>
            </a>
         </li>

         {{-- Master --}}
         <li>
            <button
               class="w-full flex items-center p-2 rounded-lg hover:bg-gray-100 group {{ request()->segment(1) == 'user' || request()->segment(1) == 'gudang' || request()->segment(1) == 'jenis' || request()->segment(1) == 'item' || request()->segment(1) == 'unit' || request()->segment(1) == 'cabang' || request()->segment(1) == 'area' || request()->segment(1) == 'barang' ? 'bg-white text-[#099AA7]' : 'text-white' }}"
               aria-controls="dropdown-masters" data-collapse-toggle="dropdown-masters">
               <div class="w-full flex justify-between items-center">
                  <div class="flex items-center">
                     <svg class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-[#099AA7]"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd"
                           d="M4.857 3A1.857 1.857 0 0 0 3 4.857v4.286C3 10.169 3.831 11 4.857 11h4.286A1.857 1.857 0 0 0 11 9.143V4.857A1.857 1.857 0 0 0 9.143 3H4.857Zm10 0A1.857 1.857 0 0 0 13 4.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 9.143V4.857A1.857 1.857 0 0 0 19.143 3h-4.286Zm-10 10A1.857 1.857 0 0 0 3 14.857v4.286C3 20.169 3.831 21 4.857 21h4.286A1.857 1.857 0 0 0 11 19.143v-4.286A1.857 1.857 0 0 0 9.143 13H4.857Zm10 0A1.857 1.857 0 0 0 13 14.857v4.286c0 1.026.831 1.857 1.857 1.857h4.286A1.857 1.857 0 0 0 21 19.143v-4.286A1.857 1.857 0 0 0 19.143 13h-4.286Z"
                           clip-rule="evenodd" />
                     </svg>
                     <span class="flex-1 ms-3 whitespace-nowrap group-hover:text-[#099AA7]">Masters</span>
                  </div>
                  {{-- Icon V --}}
                  <svg class="flex-shrink-0 w-5 h-5 transition duration-75 group-hover:text-[#099AA7]"
                     aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                     fill="none" viewBox="0 0 24 24">
                     <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 9-7 7-7-7" />
                  </svg>
               </div>
            </button>
         </li>
         <ul id="dropdown-masters" class="hidden h-[240px] overflow-auto custom-scrollbar py-2 space-y-2">
            {{-- @if (Auth::user()->level == 'super') --}}
               <li>
                  <a href="/user"
                     class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'user' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Users</a>
               </li>
            {{-- @endif --}}

            <li>
               <a href="/barang"
                  class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'barang' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Barang</a>
            </li>

            <li>
               <a href="/area"
                  class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'area' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Area</a>
            </li>

            <li>
               <a href="/unit"
                  class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'unit' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Unit</a>
            </li>

            <li>
               <a href="/cabang"
                  class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'cabang' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Cabang</a>
            </li>

            <li>
               <a href="/gudang"
                  class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'gudang' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Gudang</a>
            </li>

            <li>
               <a href="/jenis"
                  class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'jenis' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Jenis</a>
            </li>

            <li>
               <a href="/item"
                  class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'item' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Item</a>
            </li>

            <li>
               <a href="/satuan"
                  class="flex items-center w-full p-2 transition duration-75 rounded-lg pl-11 group hover:bg-white hover:text-[#099AA7] {{ request()->segment(1) == 'satuan' ? 'bg-white text-[#099AA7]' : 'text-white' }}">Satuan</a>
            </li>
         </ul>
      </ul>
   </div>
</div>