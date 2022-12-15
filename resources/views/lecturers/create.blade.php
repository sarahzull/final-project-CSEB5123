@extends('layouts/app')
@section('content')

<main>
  <div class="mx-auto max-w-lg py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <div class="px-4 py-6 sm:px-0">
      <div class="h-auto rounded border border-solid border-gray-300 p-5">
        <p class="text-2xl font-bold text-zinc-800">Add Student</p>

        <div class="flex flex-col mt-4">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <div class="mx-auto pt-6 pb-5 px-6">
                  <form
                      action="{{ route('lecturers.store') }}"
                      method="POST">
                      @csrf
                      
                    <div class="mb-4">
                      <label class="block">
                        <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Name</span>
                        <input type="text" name="name" id="name" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                      </label>
                    </div>

                    <div class="flex items-center mb-4">
                      <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                      <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Default checkbox</label>
                  </div>
                  
                    <div class="flex space-x-2 justify-end">
                      <button type="submit" class="inline-block px-6 py-2.5 bg-violet-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-violet-700 focus:bg-violet-700 focus:outline-none focus:ring-0 active:bg-violet-800 transition duration-150 ease-in-out" href="{{ route('lecturers.create')}}">
                        Save
                      </button>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <!-- /End replace -->
  </div>
</main>

@endsection