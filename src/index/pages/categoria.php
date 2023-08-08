<div class="p-4 mt-5">
    <p class="uppercase font-bold text-3xl">Categorias</p>
    <button id="new-category" class="p-3 bg-violet-800 text-white mt-5 rounded-md hover:bg-violet-600 "><i
            class="bi bi-plus"></i>Criar
        Categoria</button>

    <button id="cancel-category" class="p-3 bg-red-600 text-white mt-5 rounded-md hover:bg-red-500 hidden"><i
            class="bi bi-chevron-double-left mr-2 font-black"></i>Cancelar</button>


    <?php
        include ("../../asset/includes/connection.php");
        $sql = $conn->query("SELECT * FROM tb_category ORDER BY cd_category ASC");
    ?>
    <div class="relative overflow-x-auto shadow-md sm:rounded-lg mt-5 table-categoria">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 font-black">
                <tr>
                    <th scope="col" class="px-6 py-3 text-center">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        Status (ativo/inativo)
                    </th>
                    <th scope="col" class="px-6 py-3 text-center">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                <?php while($ret = $sql->fetch(PDO::FETCH_OBJ)){ ?>
                <tr
                    class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <th scope="row"
                        class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white text-center">
                        <?php echo $ret->nm_category;?>
                    </th>
                    <td class="px-6 py-4 text-center">
                        <?php
                            if($ret->status_category == 1){
                                echo "<p class='text-green-500 font-bold'> ATIVO </p>";
                            } else{
                                echo "<p class='text-green-500 font-bold'> ATIVO </p>";
                            }
                        ?>
                    </td>
                    <td class="px-6 py-4 text-right text-center">
                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


    <div class=" hidden form w-full px-72 mt-12">
        <div class="mb-4 mt-2">
            <p class="bg-yellow-300 p-4 rounded text-center font-bold uppercase hidden" id="returnMenssage"> </p>
            <p class="bg-green-500 p-4 rounded text-center font-bold uppercase hidden" id="returnMenssageSuccess">
                Cadastrado com
                sucesso! </p>
        </div>
        <div class="mb-6">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nome da
                Categoria</label>
            <input type="Text" id="category"
                class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500 dark:shadow-sm-light"
                required>
        </div>
        <button id="create-category"
            class="text-white bg-violet-700 hover:bg-violet-800 font-medium rounded-lg text-md px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <p class="create">
                <i class="bi bi-plus text-md"></i> Criar
                Categoria
            </p>
            <p class="loading hidden"><img src="../asset/img/loading-btn.svg" class="h-5 animate-spin inline mr-3">
                Carregando
            </p>
        </button>

    </div>
</div>
<script src="./pages/categoria.js"></script>