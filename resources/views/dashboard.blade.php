
<x-app-layout>

    <div class="min-h-screen bg-gray-100 dark:bg-gray-900">

        {{-- Sidebar --}}
        <aside
            class="fixed inset-y-0 left-0 z-40 w-64 bg-blue-700 text-white
                   transform -translate-x-full lg:translate-x-0
                   transition-transform duration-300"
            id="sidebar"
        >

            {{-- Logo --}}
        

            {{-- Navigation --}}
            <nav class="px-4 py-6 space-y-2">

                {{-- Dashboard --}}
                <a
                    href="{{ route('dashboard') }}"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg bg-blue-800 text-white"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0h6"/>
                    </svg>

                    <span>Dashboard</span>
                </a>

                {{-- Available Exams --}}
                <a
                    href="#available-exams"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-600 transition"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a3 3 0 006 0"/>
                    </svg>

                    <span>Available Exams</span>
                </a>

                {{-- My Exams --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-600 transition"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 6v6l4 2m6-2a10 10 0 11-20 0 10 10 0 0120 0z"/>
                    </svg>

                    <span>My Exams</span>
                </a>

                {{-- Results --}}
                <a
                    href="#results"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-600 transition"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 17v-2m3 2v-4m3 4v-6m2 9H7a2 2 0 01-2-2V5a2 2 0 012-2h10a2 2 0 012 2v13a2 2 0 01-2 2z"/>
                    </svg>

                    <span>Results</span>
                </a>

                {{-- Leaderboard --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-600 transition"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M12 8v4l3 2m6-2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>

                    <span>Leaderboard</span>
                </a>

                <div class="border-t border-blue-600 my-5"></div>

                {{-- Profile --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-600 transition"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M5.121 17.804A9 9 0 0112 15a9 9 0 016.879 2.804M15 10a3 3 0 11-6 0 3 3 0 016 0z"/>
                    </svg>

                    <span>Profile</span>
                </a>

                {{-- Settings --}}
                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-600 transition"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M10.325 4.317a1.724 1.724 0 013.35 0 1.724 1.724 0 002.573 1.066 1.724 1.724 0 012.474 2.474 1.724 1.724 0 001.066 2.573 1.724 1.724 0 010 3.35 1.724 1.724 0 00-1.066 2.573 1.724 1.724 0 01-2.474 2.474 1.724 1.724 0 00-2.573 1.066 1.724 1.724 0 01-3.35 0 1.724 1.724 0 00-2.573-1.066 1.724 1.724 0 01-2.474-2.474 1.724 1.724 0 00-1.066-2.573 1.724 1.724 0 010-3.35A1.724 1.724 0 005.18 7.857a1.724 1.724 0 012.474-2.474 1.724 1.724 0 002.671-1.066z"/>
                    </svg>

                    <span>Settings</span>
                </a>

                {{-- Logout --}}
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <button
                        type="submit"
                        class="w-full flex items-center gap-3 px-4 py-3 rounded-lg hover:bg-blue-600 transition text-left"
                    >
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a2 2 0 01-2 2H7a2 2 0 01-2-2V7a2 2 0 012-2h4a2 2 0 012 2v1"/>
                        </svg>

                        <span>Logout</span>
                    </button>
                </form>

            </nav>
        </aside>


        {{-- Mobile Overlay --}}
        <div
            id="sidebar-overlay"
            class="fixed inset-0 z-30 bg-black/50 hidden lg:hidden"
            onclick="toggleSidebar()"
        ></div>


        {{-- Main Content --}}
        <div class="lg:ml-64">

            {{-- Top Header --}}
            <header class="h-20 bg-white dark:bg-gray-800 shadow-sm flex items-center justify-between px-5 sm:px-8">

                {{-- Mobile Menu --}}
                <button
                    onclick="toggleSidebar()"
                    class="lg:hidden text-gray-600 dark:text-gray-300"
                >
                    <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                </button>

                <div class="hidden lg:block">
                    <h1 class="text-xl font-semibold text-gray-800 dark:text-white">
                        Dashboard
                    </h1>
                </div>

                {{-- User --}}
                <div class="flex items-center gap-3 ml-auto">

                    <div class="hidden sm:block text-right">
                        <p class="text-sm font-semibold text-gray-800 dark:text-white">
                            {{ Auth::user()->name }}
                        </p>

                        <p class="text-xs text-gray-500 dark:text-gray-400">
                            {{ Auth::user()->email }}
                        </p>
                    </div>

                    <div class="w-10 h-10 rounded-full bg-blue-600 flex items-center justify-center text-white font-semibold">
                        {{ strtoupper(substr(Auth::user()->name, 0, 1)) }}
                    </div>

                </div>

            </header>


            {{-- Dashboard Content --}}
            <main class="p-5 sm:p-8">

                {{-- Welcome --}}
                <div class="bg-blue-700 rounded-2xl shadow-lg p-6 sm:p-8 mb-8">

                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">

                        <div>
                            <p class="text-blue-100 text-sm mb-2">
                                Welcome back
                            </p>

                            <h2 class="text-2xl sm:text-3xl font-bold text-white">
                                {{ Auth::user()->name }}
                            </h2>

                            <p class="text-blue-100 mt-2">
                                Ready to test your knowledge?
                            </p>
                        </div>

                        <a
                            href="#available-exams"
                            class="mt-5 md:mt-0 inline-flex justify-center px-5 py-3 bg-white text-blue-700 font-semibold rounded-lg hover:bg-blue-50 transition"
                        >
                            Start an Exam
                        </a>

                    </div>

                </div>


                {{-- Statistics --}}
                <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-5 mb-8">

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Available Exams
                        </p>

                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white mt-2">
                            12
                        </h3>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Completed Exams
                        </p>

                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white mt-2">
                            8
                        </h3>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Average Score
                        </p>

                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white mt-2">
                            78%
                        </h3>
                    </div>

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm p-6">
                        <p class="text-sm text-gray-500 dark:text-gray-400">
                            Current Rank
                        </p>

                        <h3 class="text-3xl font-bold text-gray-800 dark:text-white mt-2">
                            #24
                        </h3>
                    </div>

                </div>


                {{-- Available Exams --}}
                <section id="available-exams">

                    <div class="flex items-center justify-between mb-5">
                        <div>
                            <h2 class="text-xl font-bold text-gray-800 dark:text-white">
                                Available Exams
                            </h2>

                            <p class="text-sm text-gray-500 dark:text-gray-400 mt-1">
                                Select an exam to start your test.
                            </p>
                        </div>
                    </div>


                    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-6">

                        {{-- PHP --}}
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden">

                            <div class="h-1.5 bg-blue-600"></div>

                            <div class="p-6">

                                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-blue-100 text-blue-700">
                                    Intermediate
                                </span>

                                <h3 class="text-lg font-bold text-gray-800 dark:text-white mt-4">
                                    PHP & Laravel
                                </h3>

                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                                    PHP, Laravel, MVC, REST API and database concepts.
                                </p>

                                <div class="flex justify-between text-sm text-gray-500 mt-5">
                                    <span>50 Questions</span>
                                    <span>60 Minutes</span>
                                </div>

                                <button class="w-full mt-5 px-4 py-2.5 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                                    Start Exam
                                </button>

                            </div>
                        </div>


                        {{-- AWS --}}
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden">

                            <div class="h-1.5 bg-blue-600"></div>

                            <div class="p-6">

                                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-green-100 text-green-700">
                                    Beginner
                                </span>

                                <h3 class="text-lg font-bold text-gray-800 dark:text-white mt-4">
                                    AWS Cloud
                                </h3>

                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                                    AWS services, cloud fundamentals and architecture.
                                </p>

                                <div class="flex justify-between text-sm text-gray-500 mt-5">
                                    <span>40 Questions</span>
                                    <span>45 Minutes</span>
                                </div>

                                <button class="w-full mt-5 px-4 py-2.5 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                                    Start Exam
                                </button>

                            </div>
                        </div>


                        {{-- DevOps --}}
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden">

                            <div class="h-1.5 bg-blue-600"></div>

                            <div class="p-6">

                                <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full bg-purple-100 text-purple-700">
                                    Advanced
                                </span>

                                <h3 class="text-lg font-bold text-gray-800 dark:text-white mt-4">
                                    DevOps & Cloud
                                </h3>

                                <p class="text-sm text-gray-500 dark:text-gray-400 mt-2">
                                    Docker, Kubernetes, Terraform, Jenkins and CI/CD.
                                </p>

                                <div class="flex justify-between text-sm text-gray-500 mt-5">
                                    <span>60 Questions</span>
                                    <span>90 Minutes</span>
                                </div>

                                <button class="w-full mt-5 px-4 py-2.5 bg-blue-600 text-white font-semibold rounded-lg hover:bg-blue-700 transition">
                                    Start Exam
                                </button>

                            </div>
                        </div>

                    </div>

                </section>


                {{-- Recent Results --}}
                <section id="results" class="mt-8">

                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-sm overflow-hidden">

                        <div class="px-6 py-5 border-b border-gray-200 dark:border-gray-700">
                            <h2 class="text-xl font-bold text-gray-800 dark:text-white">
                                Recent Results
                            </h2>
                        </div>

                        <div class="overflow-x-auto">

                            <table class="w-full text-sm text-left">

                                <thead class="bg-gray-50 dark:bg-gray-700">
                                    <tr>
                                        <th class="px-6 py-4 text-gray-600 dark:text-gray-300">
                                            Exam
                                        </th>

                                        <th class="px-6 py-4 text-gray-600 dark:text-gray-300">
                                            Date
                                        </th>

                                        <th class="px-6 py-4 text-gray-600 dark:text-gray-300">
                                            Score
                                        </th>

                                        <th class="px-6 py-4 text-gray-600 dark:text-gray-300">
                                            Status
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="divide-y divide-gray-200 dark:divide-gray-700">

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-gray-800 dark:text-white">
                                            PHP & Laravel
                                        </td>

                                        <td class="px-6 py-4 text-gray-500">
                                            20 Sep 2026
                                        </td>

                                        <td class="px-6 py-4 font-semibold text-gray-800 dark:text-white">
                                            84%
                                        </td>

                                        <td class="px-6 py-4">
                                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                                Passed
                                            </span>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="px-6 py-4 font-medium text-gray-800 dark:text-white">
                                            AWS Cloud
                                        </td>

                                        <td class="px-6 py-4 text-gray-500">
                                            18 Sep 2026
                                        </td>

                                        <td class="px-6 py-4 font-semibold text-gray-800 dark:text-white">
                                            76%
                                        </td>

                                        <td class="px-6 py-4">
                                            <span class="px-3 py-1 rounded-full text-xs font-semibold bg-green-100 text-green-700">
                                                Passed
                                            </span>
                                        </td>
                                    </tr>

                                </tbody>

                            </table>

                        </div>

                    </div>

                </section>

            </main>

        </div>

    </div>


    {{-- Sidebar JS --}}
    <script>
        function toggleSidebar() {
            const sidebar = document.getElementById('sidebar');
            const overlay = document.getElementById('sidebar-overlay');

            sidebar.classList.toggle('-translate-x-full');
            overlay.classList.toggle('hidden');
        }
    </script>

</x-app-layout>

