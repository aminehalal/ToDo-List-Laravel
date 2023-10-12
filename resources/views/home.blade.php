@include('layouts._header')
    <section>
        <div class="h-screen bg-gradient-to-r from-red-100 via-orange-100 to-yellow-100 flex flex-col justify-center items-center">
            <div class="p-7">
                <h1 class="font-bold text-5xl">ToDo-List</h1>
            </div>
            <form action="/createTask" method="POST">
                @csrf
                @auth
                <input type="hidden" value="{{auth()->user()->id}}" name="userId">
                @endauth
            <div class="flex flex-col">
                <div class="flex flex-col justify-center">
                    <label for="task" class="p-2 px-6 m-2 font-bold border border-slate-400 rounded-md flex justify-center">Why should you do ?</label>
                    <input class="rounded-md p-3 m-2" type="text" name="task" placeholder="Write a to do task ...">
                    <label for="task" class="p-2 px-6 m-2 font-bold border border-slate-400 rounded-md flex justify-center">When You have to complet that ?</label>
                    <input class="p-3 m-2" type="datetime-local" name="endIn">
                </div>
                <input type="image" class="h-7 p-1 px-2 cursor-pointer" src="images/add-symbol.svg" alt="Submit">
            </div>
        </form>
        </div>
    </section>
    @auth
        
    <section id="#myList">
        <div class="bg-gradient-to-r from-red-100 via-orange-100 to-yellow-100 flex flex-col justify-center items-center">
            <div class="pb-28 flex flex-col justify-center items-center">
                <h1 class="font-bold text-5xl pb-7">My Taks</h1>
                <table class="table-fixed border-collapse border-2 border-slate-700">
                    <thead class="">
                        <tr class>
                            <th scope="col" class="p-3 border-2 border-slate-600">#</th>
                            <th scope="col" class="p-3 border-2 border-slate-600">To Do</th>
                            <th scope="col" class="p-3 border-2 border-slate-600">Date Begin</th>
                            <th scope="col" class="p-3 border-2 border-slate-600">Date Should End</th>
                            <th scope="col" class="p-3 border-2 border-slate-600">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $numTasks = 1 ;
                        @endphp
                        @foreach ($tasks as $task)
                        <tr>        
                            <th scope="row" class="p-3 border-2 border-slate-700">{{$numTasks}}</th>
                            @if ($task->state == 'done')
                            <td class="p-3 border-2 border-slate-700 line-through" >{{$task->task}}</td>
                            @else
                            <td class="p-3 border-2 border-slate-700" >{{$task->task}}</td>
                            @endif
                            <td class="p-3 border-2 border-slate-700">{{$task->startIn}}</td>
                            <td class="p-3 border-2 border-slate-700">{{$task->endIn}}</td>
                            <td class="p-3 flex flex-col items-center sm:flex-row justify-around border border-slate-700">
                                <a href="/changeState/{{$task->id}}">
                                    <img class="h-6" src="images/done.png" >
                                </a>

                                <img class="h-6" src="images/edit.png" >
                            </td>
                        </tr>
                        @php
                            $numTasks += 1 ;
                        @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    @endauth
    
@include('layouts._footer')
