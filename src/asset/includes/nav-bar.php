<nav
    class="sidebar top-0 bottom-0 lg:left-0 left-[-300px] duration-1000 p-2 w-[300px] overflow-y-auto text-center bg-violet-900 shadow h-screen left-[-300px]">
    <div class="text-gray-100 text-xl">
        <div class="p-2.5 mt-1 flex items-center rounded-md ">
            <i class="bi bi-kanban px-2 py-1 bg-violet-600 rounded-md"></i>
            <h1 class="text-[15px]  ml-3 text-xl text-gray-200 font-bold ">Gerenciamento</h1>
            <!-- <i class="bi bi-x ml-20 cursor-pointer lg:hidden" onclick="Openbar()"></i> -->
        </div>
        <hr class="my-2 text-gray-600">
        <div>
            <!-- <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  bg-gray-700">
                <i class="bi bi-search text-sm"></i>
                <input class="text-[15px] ml-4 w-full bg-transparent focus:outline-none" placeholder="Serach" />
            </div> -->

            <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-house-door"></i>
                <span class="text-[15px] ml-4 text-gray-200 font-black ">Dashboard</span>
            </div>
            <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-tags"></i>
                <span class="text-[15px] ml-4 text-gray-200">Categorias</span>
            </div>
            <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-bag"></i>
                <span class="text-[15px] ml-4 text-gray-200">Products</span>
            </div>

            <!-- <div class="p-2.5 mt-2 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-chat-left-text-fill"></i>
                <div class="flex justify-between w-full items-center" onclick="dropDown()">
                    <span class="text-[15px] ml-4 text-gray-200">Chatbox</span>
                    <span class="text-sm rotate-180" id="arrow">
                        <i class="bi bi-chevron-down"></i>
                    </span>
                </div>
            </div>
            <div class=" leading-7 text-left text-sm font-thin mt-2 w-4/5 mx-auto" id="submenu">
                <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Social</h1>
                <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Personal</h1>
                <h1 class="cursor-pointer p-2 hover:bg-gray-700 rounded-md mt-1">Friends</h1>
            </div> -->

            <hr class="my-2 text-gray-600 ">
            <div class="p-2.5 mt-3 flex items-center rounded-md px-4 duration-300 cursor-pointer  hover:bg-blue-600">
                <i class="bi bi-box-arrow-in-right text-red-500"></i>
                <span class="text-[15px] ml-4 text-red-500">Sair</span>
            </div>


        </div>
    </div>
</nav>

<script>
function dropDown() {
    document.querySelector('#submenu').classList.toggle('hidden')
    document.querySelector('#arrow').classList.toggle('rotate-0')
}
dropDown()

// function Openbar() {
//     document.querySelector('.sidebar').classList.toggle('left-[-300px]')
// }
</script>