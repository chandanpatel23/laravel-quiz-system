<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Quiz Page</title>
    @vite ('resources/css/app.css')

</head>
<body >
   <x-navbar name={{$name}} ></x-navbar>

   <div class="bg-gray-100 flex flex-col items-center min-h-screen  pt-5">

   <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-md">
    @if(!session('quizDetails'))
    <h2 class="text-2xl text-center text-gray-800 mb-6">Add Quiz</h2>
    <form action="/add-quiz" method="get" class="space-y-4">
       
        <div>
            <input type="text" id="name" name="quiz" placeholder="Enter Quiz Name" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" >
           
        </div>

         <div>
            <select type="text" id="name" name="category_id" placeholder="Enter Quiz Name" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" >
            @foreach ($categories as $category)
            <option value="{{$category->id}}"> {{$category->name}}</option>
            @endforeach
</select>
           
        </div>
        <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2">Add</button>
    </form>
    @else
    <span class="text-green-500 font-bold">Quiz: {{session('quizDetails')->name}}</span>
    <h2 class="text-2xl text-center text-gray-800 mb-6">Add MCQs</h2>
    <form action="" method="" class="space-y-4">

        <div>
            <textarea type="text" id="question" name="question" placeholder="Enter Question" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" >
            </textarea>
           
        </div>

         <div>
            <input type="text" id="option1" name="option1" placeholder="Enter Option 1" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" >
           
        </div>

         <div>
            <input type="text" id="option2" name="option2" placeholder="Enter Option 2" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" >
           
        </div>

         <div>
            <input type="text" id="option3" name="option3" placeholder="Enter Option 3" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" >
           
        </div>

         <div>
            <input type="text" id="option4" name="option4" placeholder="Enter Option 4" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" >
           
        </div>

         <div>
            <select type="text" id="answer" name="answer" placeholder="Enter Correct Answer" 
            class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none" >
            <option value="">Select right answer</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>

</select>
           
        </div>
        <button type="submit" class="w-full bg-blue-500 rounded-xl px-4 py-2 text-white">Add More</button>
        <button type="submit" class="w-full bg-green-500 rounded-xl px-4 py-2 text-white">Add And Submit</button>

    </form>
    @endif
</div>

   </div>

</body>
</html>