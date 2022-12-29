<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Project') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
            <div class="flex space-x-2 justify-between">
              <div>
                <a href="{{ url()->previous() }}" class="text-slate-400 text-sm text-center hover:text-slate-600" aria-hidden="true">
                  <i class="fa-solid fa-arrow-left"></i>
                </a>
              </div>
            </div>

            <div class="p-6 text-gray-900">
              <form
              action="{{ route('projects.update', $project->id) }}"
              method="POST">
              @csrf
              @method('PATCH')
              
              <div class="mb-4">
                <label class="block">
                  <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Category</span>
                  <select id="category" name="category" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                      <option value="Development Project" @if ($project->category == "Development Project") {{ 'selected' }} @endif>Development Project</option>
                      <option value="Research Project" @if ($project->category == "Research Project") {{ 'selected' }} @endif>Research Project</option>
                  </select>
                </label>
              </div>

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
                  <select id="supervisor" name="supervisor" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option>Choose a supervisor</option>
                      <option value="{{ $project->supervisor->id ?? ''  }}" selected>{{ $project->supervisor->name ?? '' }}</option>
                    @foreach ($lecturers as $lecturer)
                      <option value="{{ $lecturer->id ?? '' }}">{{ $lecturer->name ?? '' }}</option>
                    @endforeach
                  </select>
                </label>
              </div>

              <div class="mb-4">
                <label class="block">
                  <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Examiner 1</span>
                  <select id="examinerOne" name="examinerOne" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option>Choose an examiner</option>
                      <option value="{{ $project->examinerOne->id ?? '' }}" selected>{{ $project->examinerOne->name ?? '' }}</option>
                    @foreach ($lecturers as $lecturer)
                      <option value="{{ $lecturer->id ?? '' }}">{{ $lecturer->name ?? '' }}</option>
                    @endforeach
                  </select>
                </label>
              </div>

              <div class="mb-4">
                <label class="block">
                  <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Examiner 2</span>
                  <select id="examinerTwo" name="examinerTwo" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option>Choose an examiner</option>
                      <option value="{{ $project->examinerTwo->id ?? '' }}" selected>{{ $project->examinerTwo->name ?? '' }}</option>
                    @foreach ($lecturers as $lecturer)
                      <option value="{{ $lecturer->id ?? '' }}">{{ $lecturer->name ?? '' }}</option>
                    @endforeach
                  </select>
                </label>
              </div>
          
              <div class="flex space-x-2 justify-end">
                <button type="submit" class="inline-block px-6 py-2.5 bg-cyan-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-cyan-700 focus:bg-cyan-700 focus:outline-none focus:ring-0 active:bg-cyan-800 transition duration-150 ease-in-out" href="{{ route('projects.show', $project->id)}}">
                  Update
                </button>
              </div>
            
              </form>
            </div>
          </div>
          
      </div>
  </div>
</x-app-layout>