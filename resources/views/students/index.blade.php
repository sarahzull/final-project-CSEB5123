@extends('layouts/app')
@section('content')

<main>
  <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
    <!-- Replace with your content -->
    <div class="px-4 py-6 sm:px-0">
      <div class="h-auto rounded border border-solid border-gray-300 p-5">
        <p class="text-2xl font-bold text-zinc-800">Student List</p>

        <div class="flex space-x-2 justify-end">
          <a type="button" class="inline-block px-6 py-2.5 bg-blue-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out" href="{{ route('students.create')}}">
            Add Student
          </a>
        </div>

        <div class="flex flex-col mt-2">
          <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
              <div class="overflow-hidden">
                <table class="min-w-full border border-slate-300">
                  <thead class=" bg-gray-500">
                    <tr>
                      <th scope="col" class="text-base font-medium text-slate-100 px-6 py-2 text-center border border-slate-300">
                        Student ID
                      </th>
                      <th scope="col" class="text-base font-medium text-slate-100 px-6 py-2 text-center border border-slate-300">
                        Name
                      </th>
                      <th scope="col" class="text-base font-medium text-slate-100 px-6 py-2 text-center border border-slate-300">
                        Project Title
                      </th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($students as $student)
                      <tr class="bg-white border">
                        <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                          {{ $student->student_id }}
                        </td>
                        <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                          {{ $student->name }}
                        </td>
                        <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                          
                        </td>
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
    <!-- /End replace -->
  </div>
</main>

@endsection