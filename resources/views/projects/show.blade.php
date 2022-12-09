@extends('layouts/app')
@section('content')

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <div class="px-4 py-6 sm:px-0">

      {{-- @if (session()->has('message'))
        <div class="alert bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
          {{ session()->get('message') }}
          <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-red-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-red-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      @endif --}}

      <div class="h-auto rounded border border-solid border-gray-300 p-5">
        <p class="text-2xl font-bold text-zinc-800">Project Details</p>

        <div class="flex space-x-2 justify-end">
          <a type="button" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out" href="{{ route('projects.create')}}">
            Edit Project
          </a>
        </div>

        <div class="grid grid-cols-2 gap-2 my-2">
          <div>
            <p class="text-lg">Student ID: <span class="font-bold text-stone-800">{{ $project->student->student_id ?? '' }}</span></p>
            <p class="text-lg">Name: <span class="font-bold text-stone-800">{{ $project->student->name ?? '' }}</span></p>
            <p class="text-lg">Project Title: <span class="font-bold text-stone-800 underline decoration-2 decoration-indigo-500">{{ $project->title }}</span></p>
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
    <!-- /End replace -->
  </div>
</main>
@endsection