<!doctype html>
<html class="bg-gray-200">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../output.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <div class="flex h-screen">
        <aside class="flex flex-col w-64 h-full px-5 py-8 overflow-y-auto bg-white border-r rtl:border-r-0 rtl:border-l dark:bg-gray-900 dark:border-gray-700">
            <a href="#">
                <img class="w-auto h-7" src="https://merakiui.com/images/logo.svg" alt="">
            </a>
            <div class="flex flex-col justify-between flex-1 mt-6">
                <nav class="-mx-3 space-y-6 ">
                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Usuarios</label>
                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="index.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5m.75-9l3-3 2.148 2.148A12.061 12.061 0 0116.5 7.605" />
                            </svg>
                            <span class="mx-2 text-sm font-medium">Usuarios registrados </span>
                        </a>
                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="agreagr_ad.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5M9 11.25v1.5M12 9v3.75m3-6v6" />
                            </svg>
                            <span class="mx-2 text-sm font-medium">Administradores</span>
                        </a>
                    </div>
                    <div class="space-y-3 ">
                        <label class="px-3 text-xs text-gray-500 uppercase dark:text-gray-400">Contenido</label>
                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="reporte.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <span class="mx-2 text-sm font-medium">Reportes</span>
                        </a>
                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="soporte.php">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12c0-1.232-.046-2.453-.138-3.662a4.006 4.006 0 00-3.7-3.7 48.678 48.678 0 00-7.324 0 4.006 4.006 0 00-3.7 3.7c-.017.22-.032.441-.046.662M19.5 12l3-3m-3 3l-3-3m-12 3c0 1.232.046 2.453.138 3.662a4.006 4.006 0 003.7 3.7 48.656 48.656 0 007.324 0 4.006 4.006 0 003.7-3.7c.017-.22.032-.441.046-.662M4.5 12l3 3m-3-3l-3 3" />
                            </svg>
                            <span class="mx-2 text-sm font-medium">Soporte</span>
                        </a>
                        <a class="flex items-center px-3 py-2 text-gray-600 transition-colors duration-300 transform rounded-lg dark:text-gray-200 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700" href="#">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75c0-.23-.035-.454-.1-.664M15 3h-3m0 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75c0-.23-.035-.454-.1-.664M15 3c.65 0 1.308.022 1.976.064.273.017.545.037.82.061M9 12h1.5m0 3h1.5m0 3h1.5M9 12V6.108c0-1.135-.845-2.098-1.976-2.192A48.424 48.424 0 007 3.826m-.102 1.024c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75c0-.23-.035-.454-.1-.664M7.227 5c.651-.073 1.308-.135 1.976-.186.273-.017.545-.037.82-.061" />
                            </svg>

                            <span class="mx-2 text-sm font-medium">Subscribers</span>
                        </a>
                    </div>
                </nav>
            </div>
        </aside>
        
        <main class="flex-1 p-10">
            <h1 class="text-2xl font-bold mb-6">Administradores</h1>
            <button id="addAdminBtn" class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Agregar Admin</button>
            <div class="overflow-x-auto">
            <table class="min-w-full bg-white dark:bg-gray-900 border dark:border-gray-700">
            <thead>
                        <tr>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 bg-gray-200 dark:bg-gray-800 text-left text-xs leading-4 font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 bg-gray-200 dark:bg-gray-800 text-left text-xs leading-4 font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                                Email
                            </th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 bg-gray-200 dark:bg-gray-800 text-left text-xs leading-4 font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                                Fecha de Registro
                            </th>
                            <th class="px-6 py-3 border-b-2 border-gray-300 dark:border-gray-700 bg-gray-200 dark:bg-gray-800 text-left text-xs leading-4 font-medium text-gray-600 dark:text-gray-200 uppercase tracking-wider">
                                Acciones
                            </th>
                        </tr>
                    </thead>
            <?php
            include('php/ver_ad.php')
            ?>
            </table>
            <div class="flex justify-between items-center mt-4">
                    <button id="prev-btn" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Anterior</button>
                    <button id="next-btn" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Siguiente</button>
                </div>
            </div>
        </main>
    </div>
    <div id="addAdminModal" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
        <div class="bg-white rounded-lg overflow-hidden shadow-xl transform transition-all max-w-lg w-full">
            <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Agregar Admin</h3>
                <button class="text-gray-400 hover:text-gray-500 focus:outline-none focus:text-gray-500 close">
                    <span class="sr-only">Close</span>
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <form id="addAdminForm" action="add_admin.php" method="POST">
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email:</label>
                        <input type="email" id="email" name="email" required class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="nombre" class="block text-sm font-medium text-gray-700">Nombre:</label>
                        <input type="text" id="nombre" name="nombre" required class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-sm font-medium text-gray-700">Contraseña:</label>
                        <input type="password" id="password" name="password" required class="mt-1 p-2 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                    </div>
                    <div class="flex justify-end">
                        <button type="submit" class="px-4 py-2 bg-green-500 text-white rounded-lg hover:bg-green-600">Agregar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

        <script>
    document.addEventListener('DOMContentLoaded', function () {
        const prevBtn = document.getElementById('prev-btn');
        const nextBtn = document.getElementById('next-btn');
        
        let currentPage = <?php echo $current_page; ?>;
        const total_pages = <?php echo $total_pages; ?>;
        
        prevBtn.addEventListener('click', function () {
            if (currentPage > 1) {
                currentPage--;
                window.location.href = `?page=${currentPage}`;
            }
        });
        
        nextBtn.addEventListener('click', function () {
            if (currentPage < total_pages) {
                currentPage++;
                window.location.href = `?page=${currentPage}`;
            }
        });
    });
    // Obtener elementos del DOM
    const modal = document.getElementById("addAdminModal");
        const btn = document.getElementById("addAdminBtn");
        const closeBtn = document.getElementsByClassName("close")[0];

        // Mostrar el modal cuando se haga clic en el botón
        btn.onclick = function() {
            modal.classList.remove("hidden");
        }

        // Cerrar el modal cuando se haga clic en el botón de cerrar (x)
        closeBtn.onclick = function() {
            modal.classList.add("hidden");
        }

        // Cerrar el modal cuando se haga clic fuera del contenido del modal
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.classList.add("hidden");
            }
        }
</script>
</body>
</html>
