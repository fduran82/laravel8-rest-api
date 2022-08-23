<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <div style="width: 900px;" class="container max-w-full mx-auto pt-10">
        <h1 class="uppercase text-4xl font-bold mb-4 text-stone-900">Posts</h1>

        <a href="/create" class="float-right bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>

        <div class="flex flex-col w-full">
            @foreach($posts as $post)
            <article class="mb-2">
                <a href="/{{ $post->id }}/view" class="text-xl font-bold text-stone-400 hover:text-stone-900">{{ $post->title }}</a>

                <hr class="mt-2">
            </article>
             @endforeach
        </div>

    </div>
</body>
</html>
