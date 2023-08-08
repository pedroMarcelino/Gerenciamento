<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("../asset/includes/links.php");?>
    <title>Gerenciamento</title>
</head>

<body>
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar"
        type="button"
        class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
        <span class="sr-only">Open sidebar</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
            xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd"
                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
            </path>
        </svg>
    </button>
    <div class="flex h-screen">
        <nav id="default-sidebar"
            class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0 "
            aria-label="Sidebar">
            <div class="h-full px-3 py-4 overflow-y-auto bg-violet-900 dark:bg-gray-800 relative text-gray-50">
                <div class="p-2.5 mt-1 flex items-center rounded-md ">
                    <i class="bi bi-kanban px-2 py-1 rounded-md"></i>
                    <h1 class="text-[15px]  ml-3 text-xl  font-bold ">Gerenciamento</h1>
                    <!-- <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i> -->
                </div>
                <hr class="my-2 text-gray-600">
                <ul class="space-y-2 font-medium ">
                    <li
                        class="flex items-center p-2 text-gray-50 rounded-lg dark:text-white hover:bg-blue-400 item-navbar dark:hover:bg-gray-700 group bg-violet-600  btn-dashboard">
                        <i class="bi bi-house-door text-2xl"></i>
                        <span class="text-lg ml-4 ml-3">Dashboard</span>

                    </li>
                    <!-- <li>
                        <a href="#"
                            class="flex items-center p-2 text-gray-50 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                            <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-50 dark:group-hover:text-white"
                                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                                viewBox="0 0 20 20">
                                <path
                                    d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                            </svg>
                            <span class="flex-1 ml-3 whitespace-nowrap">Inbox</span>
                            <span
                                class="inline-flex items-center justify-center w-3 h-3 p-3 ml-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    
                    </li> -->
                    <li
                        class="flex items-center p-2 text-gray-50 rounded-lg dark:text-white hover:bg-blue-400 item-navbar dark:hover:bg-gray-700 group btn-categoria">
                        <i class="bi bi-tags text-2xl"></i>
                        <span class="text-lg ml-4 text-gray-200">Categorias</span>

                    </li>
                    <li
                        class="flex items-center p-2 text-gray-50 rounded-lg dark:text-white hover:bg-blue-400 item-navbar dark:hover:bg-gray-700 group btn-produtos">
                        <i class="bi bi-bag text-2xl"></i>
                        <span class="text-lg ml-4 whitespace-nowrap">Produtos</span>

                    </li>
                    <li
                        class="flex items-center p-2 text-gray-50 rounded-lg dark:text-white hover:bg-blue-400 item-navbar dark:hover:bg-gray-700 group">
                        <i class="bi bi-people text-2xl"></i>
                        <span class="text-lg ml-4 whitespace-nowrap">Clientes</span>

                    </li>
                    <li
                        class="absolute inset-x-0 bottom-0 h-16 p-2 flex items-center p-2 text-gray-50 rounded-lg dark:text-white group ml-2">
                        <i class="bi bi-box-arrow-in-right text-red-500 text-2xl"></i>
                        <span class="text-lg ml-4 whitespace-nowrap text-red-500 font-black">Sair</span>

                    </li>
                </ul>
            </div>
        </nav>


        <main class="flex-1 p-4 sm:ml-64 h-screen">
            <div class="loadPage flex items-center justify-center">
                <i class="bi bi-arrow-clockwise text-4xl animate-spin hidden "></i>
            </div>
            <div class="list">

            </div>
        </main>
    </div>


    </div>
    <script src="./index.js"></script>
</body>

</html>