@include('layouts._header')

<section>
    <div class="h-screen flex flex-col justify-center  bg-gradient-to-r from-red-100 via-orange-100 to-yellow-100 font-cabin" >
        <form method="POST" action="/signupnow" class="flex flex-col items-center justify-center">
            @csrf
            <div class="flex flex-col items-center py-2">
                <label for="username" class="p-2 px-6 m-2 font-bold border border-slate-400 rounded-md">Username</label>
                <input type="text" class="p-2 border bg-transparent focus:bg-white duration-200 border-slate-400 rounded-lg" name="username">
            </div>
            <div class="flex flex-col items-center py-2">
                <label for="fullnam" class="p-2 px-6 m-2 font-bold border border-slate-400 rounded-md">Full Name</label>
                <input type="text" class="p-2 border bg-transparent focus:bg-white duration-200 border-slate-400 rounded-lg" name="fullname">
            </div>
            <div class="flex flex-col items-center py-2">
                <label for="email" class="p-2 px-6 m-2 font-bold border border-slate-400 rounded-md">Email</label>
                <input type="email" class="p-2 border bg-transparent focus:bg-white duration-200 border-slate-400 rounded-lg" name="email">
            </div>
            <div class="flex flex-col items-center py-2">
                <label for="password" class="p-2 px-6 m-2 font-bold border border-slate-400 rounded-md">Password</label>
                <input type="password" class="p-2 border bg-transparent focus:bg-white duration-200 border-slate-400 rounded-lg" name="password">
            </div>
            <button type="submit" class="p-2 px-6 m-2 font-bold border hover:text-slate-400 duration-700 border-slate-400 rounded-md">Sign In</button>
        </form>
        <div class="flex justify-around">    
            <a href="/login" class="font-bold hover:text-slate-400 duration-700">Already I have an account !</a>
        </div>
    </div>
</section>

@include('layouts._footer')