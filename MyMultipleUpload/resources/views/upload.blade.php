<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Multiple Image Upload</title>
    <script src="https://jsdelivr.net"></script>
</head>
<body class="bg-gray-100 p-10">

    <div class="max-w-xl mx-auto bg-white p-6 rounded shadow">
        <h2 class="text-xl font-bold mb-4">Upload Multiple Images</h2>

        <!-- Success Message -->
        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <!-- Error Validation -->
        @if($errors->any())
            <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
                <ul class="list-disc pl-5">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('image.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700 font-medium mb-1">Select Images:</label>
                <input type="file" name="images[]" multiple class="w-full border p-2 rounded">
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Upload</button>
        </form>

        <!-- Display Uploaded Images -->
        <h3 class="text-lg font-bold mt-8 mb-4">Uploaded Images</h3>
        <div class="grid grid-cols-3 gap-4">
            @foreach($images as $image)
                <div class="border rounded p-2 bg-gray-50">
                    <img src="{{ asset('storage/' . $image->path) }}" class="w-full h-32 object-cover rounded">
                </div>
            @endforeach
        </div>
    </div>

</body>
</html>
