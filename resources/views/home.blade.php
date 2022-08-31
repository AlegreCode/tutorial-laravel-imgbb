<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tutorial Laravel ImgBB</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <main class="bg-slate-900 h-[100vh] flex justify-center items-center">
        <section class="w-full max-w-[400px] p-3">
            <h1 class="text-3xl text-stone-300 text-center py-10">Tutorial de Laravel e ImgBB</h1>
            <form action="" method="post">
                <img src="https://fakeimg.pl/350x350/?text=IMG" class="w-[150px] h-auto mx-auto mb-10 rounded" id="preview-img">                
                                
                <label class="block mb-10">
                    <span class="sr-only">Choose File</span>
                    <input type="file" class="block w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-indigo-900 file:text-stone-300 hover:file:bg-sky-800 hover:file:cursor-pointer"
                    id="fileinput"/>
                </label>

                <input type="text" name="name" id="name" placeholder="Name image" class="block w-full p-2 mb-10 bg-transparent border-indigo-900 border-b-2 outline-0 focus:border-sky-800">
                <input type="submit" value="Enviar" class="text-center bg-indigo-900 hover:bg-sky-800 text-stone-300 p-3 rounded-xl cursor-pointer block w-full">
            </form>
        </section>
    </main>
    <script>
        const fileinput = document.querySelector("#fileinput");
        fileinput.addEventListener("change", function (e) { 
            const target = e.target.files[0];
            const previewimg = document.querySelector("#preview-img");
            previewimg.src = URL.createObjectURL(target);
         }, false);
    </script>
</body>
</html>