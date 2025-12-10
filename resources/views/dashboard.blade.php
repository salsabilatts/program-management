<x-app-layout>
    <div class="max-w-6xl mx-auto py-10 px-4 space-y-6">

        <p class="text-gray-500 mb-6">Welcome to your Program Management App.</p>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

            <!-- Categories Card -->
            <a href="{{ route('categories.index') }}"
               class="bg-white shadow rounded-lg p-6 hover:shadow-md transition border border-gray-100">
                <h2 class="text-xl font-semibold text-gray-800">Manage Categories</h2>
                <p class="text-gray-500 mt-2">View, add, update, and delete categories.</p>
            </a>

            <!-- Programs Card -->
            <a href="{{ route('programs.index') }}"
               class="bg-white shadow rounded-lg p-6 hover:shadow-md transition border border-gray-100">
                <h2 class="text-xl font-semibold text-gray-800">Manage Programs</h2>
                <p class="text-gray-500 mt-2">Create or edit programs with categories.</p>
            </a>

        </div>
    </div>
</x-app-layout>
