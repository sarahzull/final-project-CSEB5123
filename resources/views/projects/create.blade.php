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
                <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Category</span>
                <select id="category" name="category" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option>Choose a category</option>
                    <option value="Development Project">Development Project</option>
                    <option value="Research Project">Research Project</option>
                </select>
              </label>
            </div>

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
                    <option selected>Choose a student</option>
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
                    <option selected>Choose a supervisor</option>
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
                    <option selected>Choose an examiner 1</option>
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
                    <option selected>Choose an examiner 2</option>
                    @foreach ($lecturers as $lecturer)
                      <option value="{{ $lecturer->id }}">{{ $lecturer->name }}</option>
                    @endforeach
                  </select>
              </label>
            </div>

            {{-- <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700">Start Date</span>
                <input type="date" name="start_date" id="start_date" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
              </label>
            </div>

            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700">End Date</span>
                <input type="date" name="end_date" id="end_date" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
              </label>
            </div>

            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700">Duration (month)</span>
                <input type="number" name="duration" id="duration" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" min="0">
              </label>
            </div>

            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700">Progress</span>
                <select id="progress" name="progress" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option selected>Choose a progress</option>
                    <option value="Milestone 1">Milestone 1</option>
                    <option value="Milestone 2">Milestone 2</option>
                    <option value="Final Report">Final Report</option>
                </select>
              </label>
            </div>

            <div class="mb-4">
              <label class="block">
                <span class="block text-sm font-medium text-slate-700">Status</span>
                <select id="status" name="status" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option selected>Choose a status</option>
                    <option value="On track">On track</option>
                    <option value="Delayed">Delayed</option>
                    <option value="Extended">Extended</option>
                    <option value="Completed">Completed</option>
                </select>
              </label>
            </div> --}}
        
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