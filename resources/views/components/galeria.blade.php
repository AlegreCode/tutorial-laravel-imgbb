@props(['images'])

<section class="p-4 max-w-[960px] mx-auto grid grid-cols-1 gap-4 justify-items-center sm:grid-cols-2 lg:grid-cols-3">
    @foreach ($images as $image)
        <div class="bg-red-500 w-[300px] h-[300px] sm:even:justify-self-start sm:odd:justify-self-end lg:even:justify-self-auto lg:odd:justify-self-auto flex justify-center items-center text-white last:bg-sky-500">
            <figure class="relative">
                <img src="{{ $image->url }}" alt="image" class="w-full h-auto">
                <figcaption class="absolute bg-black/75 bottom-0 left-0 w-full p-4">{{ $image->title}}</figcaption>
            </figure>
        </div>                    
    @endforeach
</section>