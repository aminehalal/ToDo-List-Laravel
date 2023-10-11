@include('layouts._header')

<section>
    <div class="h-screen flex flex-col justify-center  bg-gradient-to-r from-red-100 via-orange-100 to-yellow-100 font-cabin" >
        <form method="POST" action="loginnow" class="flex flex-col items-center justify-center">
            @csrf
            <div class="flex flex-col items-center py-2">
                <label for="username" class="p-2 px-6 m-2 font-bold border border-slate-400 rounded-md">Username</label>
                <input type="text" class="p-2 border bg-transparent focus:bg-white duration-200 border-slate-400 rounded-lg" name="username">
            </div>
            <div class="flex flex-col items-center py-2">
                <label for="password" class="p-2 px-6 m-2 font-bold border border-slate-400 rounded-md">Password</label>
                <input type="password" class="p-2 border bg-transparent focus:bg-white duration-200 border-slate-400 rounded-lg" name="password">
            </div>
            <button type="submit" class="p-2 px-6 m-2 font-bold border hover:text-slate-400 duration-700 border-slate-400 rounded-md">Log In</button>
        </form>
        <div class="flex justify-around">    
            <a href="/signup" class="font-bold hover:text-slate-400 duration-700">I dont have an account</a>
            <a href="" class="font-bold hover:text-slate-400 duration-700">I forget my Password</a>
        </div>
    </div>
</section>

@include('layouts._footer')