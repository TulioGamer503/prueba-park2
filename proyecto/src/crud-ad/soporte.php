<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('location:../login.html');
    exit();
}

// Aquí obtienes el nombre del usuario desde la sesión o la base de datos
$nombre_usuario = $_SESSION['email']; // Asumiendo que guardaste el nombre del usuario en la sesión
?>
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
            <h1 class="text-2xl font-bold mb-6">Usuarios Registrados</h1>
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
                    <tbody id="table-body">
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                Juan Pérez
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                juan.perez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-18
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                María López
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                maria.lopez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-19
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                María López
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                maria.lopez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-19
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                María López
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                maria.lopez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-19
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr><tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                María López
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                maria.lopez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-19
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr><tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                María López
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                maria.lopez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-19
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                María López
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                maria.lopez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-19
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr><tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                María López
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                maria.lopez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-19
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr><tr>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                María López
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                maria.lopez@example.com
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                2024-06-19
                            </td>
                            <td class="px-6 py-4 whitespace-no-wrap border-b border-gray-300 dark:border-gray-700">
                                <button class="text-gray-600 dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12H9m2-4h2m-4 8h4m4 5H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v14a2 2 0 01-2 2z" />
                                    </svg>
                                </button>
                                <button class="text-gray-600 dark:text-gray-200 hover:text-red-500 dark:hover:text-red-400 mx-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-1 14H6L5 7m14 0H5M4 4h16M10 11v6m4-6v6" />
                                    </svg>
                                </button>
                            </td>
                        </tr>
                        <!-- Agrega más filas según sea necesario -->
                    </tbody>
                </table>
                <div class="flex justify-between items-center mt-4">
                    <button id="prev-btn" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Anterior</button>
                    <button id="next-btn" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Siguiente</button>
                </div>
            </div>
        </main>
    </div>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const rowsPerPage = 6;
            const tableBody = document.getElementById("table-body");
            const rows = tableBody.getElementsByTagName("tr");
            const totalRows = rows.length;
            let currentPage = 1;
            const totalPages = Math.ceil(totalRows / rowsPerPage);

            function showPage(page) {
                const start = (page - 1) * rowsPerPage;
                const end = start + rowsPerPage;
                
                for (let i = 0; i < totalRows; i++) {
                    rows[i].style.display = i >= start && i < end ? "" : "none";
                }
            }

            document.getElementById("prev-btn").addEventListener("click", function() {
                if (currentPage > 1) {
                    currentPage--;
                    showPage(currentPage);
                }
            });

            document.getElementById("next-btn").addEventListener("click", function() {
                if (currentPage < totalPages) {
                    currentPage++;
                    showPage(currentPage);
                }
            });

            showPage(currentPage);
        });
    </script>
</body>
</html>
