<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create a Post</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <h1 class="uppercase text-4xl font-bold mb-4 text-stone-900">Create Post</h1>

        <form method="POST" action="/">
            @csrf

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="title">Title: </label>
                <input class="h-10 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title">
            </div>

            <div class="mb-4">
                <label class="font-bold text-gray-800" for="content">Content: </label>
                <textarea class="h-16 bg-white border border-gray-300 rounded py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content"></textarea>
            </div>

            <button class="bg-amber-600 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
            <a href="/" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
        </form>
    </div>
</body>
</html>
