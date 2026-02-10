<!doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
  </head>
  <body>
    <h1 class="text-3xl font-bold text-right underline">
      Hello world!
    </h1>

    <div>
        <div class="flex text-center border-2 border-black">
            <div class="bg-red-500 flex-auto">1</div>
            <div class="bg-green-500 flex-auto">2</div>
            <div class="bg-blue-500 flex-auto">3</div>
        </div>
        <div class="bg-red-500 h-5 w-1/2"></div>

        <div class="columns-3 gap-8">
            <img class="aspect-square object-cover h-full w-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS6zx9BWuAfYiwIX76OXvPc9G2PfeCktaNyPw&s" alt="">
            <img class="aspect-square object-cover h-full w-full" src="https://plus.unsplash.com/premium_photo-1682145730713-34bba6d3d14a?fm=jpg&q=60&w=3000&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8YXBpfGVufDB8fDB8fHww" alt="">
            <img class="aspect-3/2 object-cover h-full w-full" src="https://images.unsplash.com/5/unsplash-kitsune-4.jpg?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bc01c83c3da0425e9baa6c7a9204af81" alt="">
        </div>
    </div>
  </body>
</html>