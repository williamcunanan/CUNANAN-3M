<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Item Input & Showcase</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex flex-col items-center py-10">

    <div class="bg-white p-6 rounded-lg shadow-md w-96">
        <h2 class="text-xl font-bold text-center text-gray-800">Add Item</h2>

        <form action="{{ route('items.store') }}" method="POST" class="mt-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Item Name</label>
                <input type="text" id="name" name="name" required 
                    class="mt-1 block w-full px-4 py-2 border rounded-lg border-gray-300 shadow-sm">
            </div>

            <div class="mt-4">
                <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                <textarea id="description" name="description" required 
                    class="mt-1 block w-full px-4 py-2 border rounded-lg border-gray-300 shadow-sm"></textarea>
            </div>

            <button type="submit" 
                class="mt-6 w-full bg-indigo-600 hover:bg-indigo-700 text-white py-2 rounded-lg text-lg font-medium">
                Add Item
            </button>
        </form>
    </div>

    <!-- Item Showcase -->
    <div class="mt-10 w-96">
        <h2 class="text-xl font-bold text-center text-gray-800">Item Showcase</h2>
        @foreach($items as $item)
            <div class="mt-4 bg-white p-4 rounded-lg shadow-md">
                <h3 class="text-lg font-semibold">{{ $item->name }}</h3>
                <p class="text-gray-600">{{ $item->description }}</p>
            </div>
        @endforeach
    </div>


    
</body>
</html>
