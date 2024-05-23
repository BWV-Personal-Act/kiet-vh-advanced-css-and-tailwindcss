<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script src="https://unpkg.com/@material-tailwind/html@latest/scripts/collapse.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    @vite(['resources/css/app.css', 'resources/css/home.css'], 'build')
    <title>Home</title>
</head>

<body>
    <div class="topbar bg-[#006a31] w-full">
        <div class="p-1.5">
            <div class="flex justify-center align-middle text-center text-white font-normal tracking-wide">
                <h4>Chào mừng bạn đến với Dola Food!</h4>
            </div>
        </div>
    </div>
    <nav class="bg-white lg:mx-24">
        <div class="container mx-auto py-2 flex items-center gap-1">
            <div class="menu-bar md:w-1/12 sm:w-1/12 lg:hidden">
                <button type="button"
                    class="inline-flex items-center rounded-full mx-3 bg-slate-100 p-2 w-10 h-10 justify-center text-sm text-gray-500 lg:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    data-drawer-target="drawer-example" data-drawer-show="drawer-example"
                    aria-controls="drawer-example">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div
                class="lg:w-6/12 md:w-11/12 sm:w-11/12 flex flex-col w-10/12 sm:flex-row md:flex-row justify-center items-center">
                <div class="sm:w-5/12 w-full flex justify-center items-center">
                    <img src="https://bizweb.dktcdn.net/100/510/571/themes/941527/assets/logo.png?171604463336"
                        class="sm:max-h-[66px] sm:py-0 max-h-[44px] my-2">
                </div>
                <div class="w-full relative flex h-full items-center">
                    <input type="text" id="search"
                        class="bg-[#DDDDDD] border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full px-3 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Bạn muốn tìm gì?" required />
                    <button type="button"
                        class="w-8 flex justify-center items-center absolute h-full right-0 focus:outline-none text-white bg-[#e31837] hover:bg-purple-800 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 dark:bg-purple-600 dark:hover:bg-purple-700 dark:focus:ring-purple-900">
                        <i class="fa fa-search"></i>
                    </button>
                </div>
            </div>
            <div
                class="lg:w-6/12 md:w-2/12 sm:w-2/12 flex h-full items-center justify-end sm:justify-center lg:justify-center align-middle gap-1.5">
                <img src="https://bizweb.dktcdn.net/100/510/571/themes/941527/assets/delivery.png?1716044633369"
                    class="h-12 hidden lg:block">
                <div class="hidden lg:block flex-col justify-content-around">
                    <p class="font-semibold color-[#212529]">Giao hàng tận nơi</p>
                    <a href="tel:0396527908" class="font-bold text-red-500 hover:text-green-600">0396527908</a>
                </div>
                <div
                    class="icon hidden lg:flex w-10 h-10 justify-center items-center rounded-full bg-[#ddd] text-[#006a31]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z">
                        </path>
                    </svg>
                </div>
                <div
                    class="icon relative w-10 h-10 mx-3 flex justify-center items-center rounded-full bg-[#ddd] text-[#006a31] lg:mx-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                        class="bi bi-basket2" viewBox="0 0 16 16">
                        <path
                            d="M4 10a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 0 1 2 0v2a1 1 0 0 1-2 0v-2zm3 0a1 1 0 1 1 2 0v2a1 1 0 0 1-2 0v-2z">
                        </path>
                        <path
                            d="M5.757 1.071a.5.5 0 0 1 .172.686L3.383 6h9.234L10.07 1.757a.5.5 0 1 1 .858-.514L13.783 6H15.5a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-.623l-1.844 6.456a.75.75 0 0 1-.722.544H3.69a.75.75 0 0 1-.722-.544L1.123 8H.5a.5.5 0 0 1-.5-.5v-1A.5.5 0 0 1 .5 6h1.717L5.07 1.243a.5.5 0 0 1 .686-.172zM2.163 8l1.714 6h8.246l1.714-6H2.163z">
                        </path>
                    </svg>
                    <span
                        class="rounded-full bg-red-500 w-5 h-5 text-white font-medium text-xs absolute bottom-7 left-6 justify-center items-center flex count count_item_pr hidden-count">0</span>
                </div>
                <button type="button"
                    class="hidden lg:block focus:outline-none text-white bg-[#e31837] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-[15px] text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Đặt
                    món online</button>
                <button type="button"
                    class="hidden lg:block focus:outline-none text-white bg-[#e31837] hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-[15px] text-sm px-5 py-2.5 me-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Đặt
                    bàn</button>
            </div>
        </div>
    </nav>
    {{-- Menu --}}
    <div class="bg-[#006a31] flex items-center hidden lg:block">
        <ul class="mx-28 py-1 text-white flex font-semibold gap-2 justify-center">
            <li class="px-3.5 py-2.5  text-center rounded-[10px] bg-[#e31837]">Trang chủ</li>
            <li class="px-3.5 py-2.5 text-center rounded-[10px] hover:bg-[#e31837]">Giới thiệu</li>
            <li class="px-3.5 py-2.5 text-center rounded-[10px] hover:bg-[#e31837]">Sản phẩm</li>
            <li class="px-3.5 py-2.5 text-center rounded-[10px] hover:bg-[#e31837]">Tin tức</li>
            <li class="px-3.5 py-2.5 text-center rounded-[10px] hover:bg-[#e31837]">Liên hệ</li>
            <li class="px-3.5 py-2.5 text-center rounded-[10px] hover:bg-[#e31837]">Câu hỏi thường gặp</li>
            <li class="px-3.5 py-2.5 text-center rounded-[10px] hover:bg-[#e31837]">Hệ thống cửa hàng</li>
            <li class="px-3.5 py-2.5 text-center rounded-[10px] hover:bg-[#e31837]">Đặt bàn</li>
        </ul>
    </div>

    {{-- Off canvas menu --}}
    <!-- drawer component -->
    <div id="drawer-example"
        class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-white w-80 dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-label">
        <h5 id="drawer-label"
            class="inline-flex items-center mb-4 text-base font-semibold text-gray-500 dark:text-gray-400"><svg
                class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                viewBox="0 0 20 20">
                <path
                    d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
            </svg>Menu</h5>
        <button type="button" data-drawer-hide="drawer-example" aria-controls="drawer-example"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 14 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
            </svg>
            <span class="sr-only">Close menu</span>
        </button>

        <div class="grid grid-cols-2 gap-4">

        </div>
    </div>
</body>

</html>
