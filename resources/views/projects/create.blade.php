<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Add Project') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
            <form
            action="{{ route('projects.store') }}"
            method="POST">
            @csrf
            
            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Project Title</span>
                <input type="text" name="title" id="title" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
              </label>
            </div>

            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Student Name</span>
                  <select id="student" name="student" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option>Choose a student</option>
                    @foreach ($students as $student)
                      <option value="{{ $student->id }}">{{ $student->name }}</option>
                    @endforeach
                  </select>
              </label>
            </div>

            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Supervisor</span>
                  <select id="supervisor" name="supervisor" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option>Choose a supervisor</option>
                    @foreach ($lecturers as $lecturer)
                      <option value="{{ $lecturer->id }}">{{ $lecturer->name }}</option>
                    @endforeach
                  </select>
              </label>
            </div>

            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Examiner 1</span>
                  <select id="examiner1" name="examinerOne" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option>Choose an examiner 1</option>
                    @foreach ($lecturers as $lecturer)
                      <option value="{{ $lecturer->id }}">{{ $lecturer->name }}</option>
                    @endforeach
                  </select>
              </label>
            </div>

            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Examiner 2</span>
                  <select id="examiner2" name="examinerTwo" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option>Choose an examiner 2</option>
                    @foreach ($lecturers as $lecturer)
                      <option value="{{ $lecturer->id }}">{{ $lecturer->name }}</option>
                    @endforeach
                  </select>
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
</x-app-layout>