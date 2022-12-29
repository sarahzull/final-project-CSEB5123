<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Project List') }}
      </h2>
  </x-slot>

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          @if (session()->has('message'))
            <div class="alert bg-green-100 rounded-lg py-5 px-6 mb-3 text-base text-green-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
              {{ session()->get('message') }}
              <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-green-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-green-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
          @endif

          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
            <div class="flex space-x-2 justify-end">
              <a type="button" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out" href="{{ route('projects.create')}}">
                Add Project
              </a>
            </div>
    
            <div class="flex flex-col mt-2">
              <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
                  <div class="overflow-hidden">
                    <table class="min-w-full border border-slate-300">
                      <thead class=" bg-slate-50">
                        <tr class="font-sans">
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300 ">
                            Student Name
                          </th>
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300 ">
                            Supervisor
                          </th>
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                            Project Title
                          </th>
                          <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                            
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($projects as $project)
                          <tr class="bg-white border font-sans">
                            <td class=" text-gray-900 px-6 py-4 whitespace-normal border border-slate-300">
                              {{ $project->student->name ?? '' }}
                            </td>
                            <td class=" text-gray-900 px-6 py-4 whitespace-normal border border-slate-300">
                              {{ $project->supervisor->name ?? '' }}
                            <td class=" text-gray-900 px-6 py-4 whitespace-normal border border-slate-300">
                              {{ $project->title }}
                            </td>
                            <td class="text-center text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                              <a type="button" class="inline-block px-6 py-2.5 bg-cyan-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-cyan-700 focus:bg-cyan-700 focus:outline-none focus:ring-0 active:bg-cyan-800 transition duration-150 ease-in-out" href="{{ route('projects.show', $project->id)}}">
                                View Project
                              </a>
                            </td>
                            {{-- <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                              <div class="flex justify-center gap-3">
                                <div>
                                  <a href="#" class="text-slate-400 text-sm text-center hover:text-slate-600">
                                    <i class="fas fa-edit"></i>
                                  </a>
                                </div>
                                <div>
                                  <form action="{{ route('students.destroy', $student->student_id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-slate-400 text-sm text-center hover:text-rose-600">
                                      <i class="fas fa-trash"></i>
                                    </button>
                                  </form>
                                </div>
                              </div>
                            </td> --}}
                          </tr>
                        @endforeach
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
