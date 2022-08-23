<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $post->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-4">
        <a href="/" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Back</a>

        <h3 class="uppercase text-4xl font-bold mb-4 text-stone-900">{{ $post->title }}</h3>
        <p class="font-light text-stone-400 pb-10">{{$post->content}}</p>

        <a href="/{{ $post->id }}/edit" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Edit Post</a>

    </div>
</body>
</html>
