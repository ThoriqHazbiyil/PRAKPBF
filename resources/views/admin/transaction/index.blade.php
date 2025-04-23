<x-app-layout>
   @include('layouts.sidebar-admin')
   
   <div class="p-4 sm:ml-64">
       <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
       <div class="flex items-center justify-between">
         <h1 class=" text-xl font-semibold">Transaksi</h1>
      
    
       </div>
       <div class="relative overflow-x-auto mt-6 shadow-md sm:rounded-lg">
         <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
           <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
             <tr>
               <th scope="col" class="px-6 py-3">Nama Pembeli</th>
               <th scope="col" class="px-6 py-3">Hewan yang Dibeli</th>
               <th scope="col" class="px-6 py-3">Status Pembayaran</th>
               <th scope="col" class="px-6 py-3">Tanggal Pembayaran</th>
               <th scope="col" class="px-6 py-3">Harga Beli (Rp)</th>
             </tr>
           </thead>
           <tbody>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Ahmad Fauzi</td>
               <td class="px-6 py-4">Sapi Bali</td>
               <td class="px-6 py-4 text-green-600 font-semibold">Sudah Bayar</td>
               <td class="px-6 py-4">2025-04-15</td>
               <td class="px-6 py-4">18.000.000</td>
             </tr>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Siti Nurhaliza</td>
               <td class="px-6 py-4">Kambing Etawa</td>
               <td class="px-6 py-4 text-red-500 font-semibold">Belum Bayar</td>
               <td class="px-6 py-4">-</td>
               <td class="px-6 py-4">2.500.000</td>
             </tr>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Dian Saputra</td>
               <td class="px-6 py-4">Kambing Jawa</td>
               <td class="px-6 py-4 text-green-600 font-semibold">Sudah Bayar</td>
               <td class="px-6 py-4">2025-04-10</td>
               <td class="px-6 py-4">2.000.000</td>
             </tr>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Rudi Hartono</td>
               <td class="px-6 py-4">Sapi Limousin</td>
               <td class="px-6 py-4 text-red-500 font-semibold">Belum Bayar</td>
               <td class="px-6 py-4">-</td>
               <td class="px-6 py-4">25.000.000</td>
             </tr>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Lina Marlina</td>
               <td class="px-6 py-4">Kambing Boer</td>
               <td class="px-6 py-4 text-green-600 font-semibold">Sudah Bayar</td>
               <td class="px-6 py-4">2025-03-30</td>
               <td class="px-6 py-4">3.000.000</td>
             </tr>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Bayu Pamungkas</td>
               <td class="px-6 py-4">Sapi PO</td>
               <td class="px-6 py-4 text-red-500 font-semibold">Belum Bayar</td>
               <td class="px-6 py-4">-</td>
               <td class="px-6 py-4">19.500.000</td>
             </tr>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Intan Permatasari</td>
               <td class="px-6 py-4">Kambing PE</td>
               <td class="px-6 py-4 text-green-600 font-semibold">Sudah Bayar</td>
               <td class="px-6 py-4">2025-04-01</td>
               <td class="px-6 py-4">2.800.000</td>
             </tr>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Ali Syahputra</td>
               <td class="px-6 py-4">Sapi Brahman</td>
               <td class="px-6 py-4 text-green-600 font-semibold">Sudah Bayar</td>
               <td class="px-6 py-4">2025-04-18</td>
               <td class="px-6 py-4">22.000.000</td>
             </tr>
             <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
               <td class="px-6 py-4">Nurhasanah</td>
               <td class="px-6 py-4">Kambing Gemuk</td>
               <td class="px-6 py-4 text-red-500 font-semibold">Belum Bayar</td>
               <td class="px-6 py-4">-</td>
               <td class="px-6 py-4">2.700.000</td>
             </tr>
             <tr class="bg-white dark:bg-gray-800">
               <td class="px-6 py-4">Budi Santoso</td>
               <td class="px-6 py-4">Sapi Simmental</td>
               <td class="px-6 py-4 text-green-600 font-semibold">Sudah Bayar</td>
               <td class="px-6 py-4">2025-04-20</td>
               <td class="px-6 py-4">27.000.000</td>
             </tr>
           </tbody>
         </table>
       </div>
       
       
       </div>
    </div>
   </x-app-layout>