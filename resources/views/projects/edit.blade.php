@extends('layouts/app')
@section('content')

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <div class="px-4 py-6 sm:px-0">
      <div class="grid grid-cols-2 gap-4">
        <div class="h-auto rounded border border-solid border-gray-300 p-5">
          <div class="flex flex-col mt-4">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <div class="mx-auto pt-6 pb-5 px-6">
                    <form
                        action="{{ route('projects.store') }}"
                        method="GET">
                        @csrf
                        
                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Project Title</span>
                          <input type="text" name="title" id="title" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" value="{{ $project->title ?? '' }}">
                        </label>
                      </div>
  
                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Student Name</span>
                          <input type="text" name="title" id="title" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" value="{{ $project->student->name ?? '' }}" disabled>
                        </label>
                      </div>

                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Supervisor</span>
                          {{-- <select id="supervisor" name="supervisor" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                            <option>Choose a supervisor</option>
                              <option value="{{ $project->supervisor->id}}" selected>{{ $project->supervisor->name ?? '' }}</option>
                            @foreach ($lecturers as $lecturer)
                              <option value="{{ $lecturer->id }}">{{ $lecturer->name ?? '' }}</option>
                            @endforeach
                          </select> --}}
                          <input type="text" name="supervisor" id="supervisor" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" value="{{ $project->supervisor->name ?? '' }}">
                        </label>
                      </div>

                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Examiner 1</span>
                          <input type="text" name="examinerOne" id="examinerOne" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" value="{{ $project->examinerOne->name ?? '' }}">
                        </label>
                      </div>

                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Examiner 2</span>
                          <input type="text" name="examinerTwo" id="examinerTwo" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" value="{{ $project->examinerTwo->name ?? '' }}">
                        </label>
                      </div>
                    
                      <div class="flex space-x-2 justify-end">
                        <button type="submit" class="inline-block px-6 py-2.5 bg-violet-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-violet-700 focus:bg-violet-700 focus:outline-none focus:ring-0 active:bg-violet-800 transition duration-150 ease-in-out" href="{{ route('projects.create')}}">
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
        <!-- ... -->
        <div class="h-auto rounded border border-solid border-gray-300 p-5">
          <div class="flex flex-col mt-4">
            <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
              <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                <div class="overflow-hidden">
                  <div class="mx-auto pt-6 pb-5 px-6">
                    <form
                        action="{{ route('projects.store') }}"
                        method="GET">
                        @csrf
                        
                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Project Title</span>
                          <input type="text" name="title" id="title" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" value="{{ $project->title ?? '' }}">
                        </label>
                      </div>
  
                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Student Name</span>
                          <input type="text" name="title" id="title" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" value="{{ $project->student->name ?? '' }}" disabled>
                        </label>
                      </div>

                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Supervisor</span>
                          {{-- <select id="supervisor" name="supervisor" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                            <option>Choose a supervisor</option>
                              <option value="{{ $project->supervisor->id}}" selected>{{ $project->supervisor->name ?? '' }}</option>
                            @foreach ($lecturers as $lecturer)
                              <option value="{{ $lecturer->id }}">{{ $lecturer->name ?? '' }}</option>
                            @endforeach
                          </select> --}}
                          <input type="text" name="supervisor" id="supervisor" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" value="{{ $project->supervisor->name ?? '' }}">
                        </label>
                      </div>

                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Examiner 1</span>
                          <input type="text" name="examinerOne" id="examinerOne" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" value="{{ $project->examinerOne->name ?? '' }}">
                        </label>
                      </div>

                      <div class="mb-4">
                        <label class="block">
                          <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Examiner 2</span>
                          <input type="text" name="examinerTwo" id="examinerTwo" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" value="{{ $project->examinerTwo->name ?? '' }}">
                        </label>
                      </div>
                    
                      <div class="flex space-x-2 justify-end">
                        <button type="submit" class="inline-block px-6 py-2.5 bg-violet-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-violet-700 focus:bg-violet-700 focus:outline-none focus:ring-0 active:bg-violet-800 transition duration-150 ease-in-out" href="{{ route('projects.create')}}">
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

    </div>
    <!-- /End replace -->
  </div>
</main>

@endsection