<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Project Details') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
            <div class="flex space-x-2 justify-between">
              <div>
                <a href="{{ route('projects.index') }}" class="text-slate-400 text-sm text-center hover:text-slate-600" aria-hidden="true">
                  <i class="fa-solid fa-arrow-left"></i>
                </a>
              </div>
              <div>
                <div class="flex justify-center gap-2 mb-2">
                    <div>
                      <button type="button" class="px-4 py-2.5 bg-blue-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">
                        <a href="{{ route('projects.edit', $project->id)}}">Edit Project</a>
                      </button>
                    </div>
                  @can('isAdmin')
                    <div>
                      <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="px-4 py-2.5 bg-rose-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-rose-700 focus:bg-rose-700 focus:outline-none focus:ring-0 active:bg-rose-800 transition duration-150 ease-in-out">
                          Delete Project
                        </button>
                      </form>
                    </div>
                  @endcan
                </div>
              </div>
            </div>
    
            <div class="grid grid-cols-2 gap-2 my-2">
              <div>
                {{-- <p class="text-lg">Student ID: <span class="font-bold text-stone-800">{{ $project->student->student_id ?? '' }}</span></p> --}}
                <p class="text-lg">Name: <span class="font-bold text-stone-800">{{ $project->student->name ?? '' }}</span></p>
                <p class="text-lg">Project Title: <span class="font-bold text-stone-800 underline decoration-2 decoration-indigo-500">{{ $project->title }}</span></p>
                <p class="text-lg">Category: 
                  @if ($project->category == 'Development Project')
                    <span class="text-emerald-700 font-bold">{{ $project->category }}</span>
                  @else
                    <span class="text-purple-700 font-bold">{{ $project->category }}</span>
                  @endif
                </p>
              </div>
              
              <div>
                <p class="text-lg">Supervisor: <span class="font-bold text-stone-800">{{ $project->supervisor->name ?? '' }}</span></p>
                <p class="text-lg">Examiner 1: <span class="font-bold text-stone-800">{{ $project->examinerOne->name ?? '' }}</span></p>
                <p class="text-lg">Examiner 2: <span class="font-bold text-stone-800">{{ $project->examinerTwo->name ?? '' }}</span></p>
              </div>
            </div>

            <div class="flex justify-end mb-2">
              <div>
                <button type="button" class="px-4 py-2.5 bg-teal-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-teal-700 focus:bg-teal-700 focus:outline-none focus:ring-0 active:bg-teal-800 transition duration-150 ease-in-out">
                  <a href="{{ route('details.create', ['details' => $project->details, 'project_id' => $project->id])}}">Add Activity</a>
                </button>
              </div>
            </div>

            @include('projects.details-view', ['details' => $project->details, 'project_id' => $project->id])
    
          </div>
      </div>
  </div>
</x-app-layout>

