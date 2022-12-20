<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Project Details') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
            <div class="flex justify-between space-x-2">
              <div>
                <a href="{{ route('projects.index') }}" class="text-slate-400 text-sm text-center hover:text-slate-600" aria-hidden="true">
                  <i class="fa-solid fa-arrow-left"></i>
                </a>
              </div>
              <div>
                <a type="button" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out" href="{{ route('projects.edit', $project->id)}}">
                  Edit Project
                </a>
                <a type="button" class="inline-block px-6 py-2.5 bg-rose-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-rose-700 focus:bg-rose-700 focus:outline-none focus:ring-0 active:bg-rose-800 transition duration-150 ease-in-out" href="">
                  Delete Project
                </a>
              </div>
            </div>
    
            <div class="grid grid-cols-2 gap-2 my-2">
              <div>
                <p class="text-lg">Student ID: <span class="font-bold text-stone-800">{{ $project->student->student_id ?? '' }}</span></p>
                <p class="text-lg">Name: <span class="font-bold text-stone-800">{{ $project->student->name ?? '' }}</span></p>
                <p class="text-lg">Project Title: <span class="font-bold text-stone-800 underline decoration-2 decoration-indigo-500">{{ $project->title }}</span></p>
                <p class="text-lg">Category: <span class="text-emerald-700 font-bold">{{ $project->category }}</span></p>
              </div>
              
              <div>
                <p class="text-lg">Supervisor: <span class="font-bold text-stone-800">{{ $project->supervisor->name ?? '' }}</span></p>
                <p class="text-lg">Examiner 1: <span class="font-bold text-stone-800">{{ $project->examinerOne->name ?? '' }}</span></p>
                <p class="text-lg">Examiner 2: <span class="font-bold text-stone-800">{{ $project->examinerTwo->name ?? '' }}</span></p>
              </div>
            </div>
    
            <div class="flex flex-col mt-2">
              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="overflow-hidden">
                    <table class="min-w-full border border-slate-300">
                      <thead class=" bg-slate-50">
                        <tr class="font-sans">
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300 ">
                            Start Date
                          </th>
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300 ">
                            End Date
                          </th>
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                            Duration (month)
                          </th>
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                            Progress
                          </th>
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                            Status
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr class="bg-white border font-sans">
                          <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300 text-center">
                            
                          </td>
                          <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                            
                          <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                            
                          </td>
                          <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                            
                          </td>
                          <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                            
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
  </div>
</x-app-layout>

