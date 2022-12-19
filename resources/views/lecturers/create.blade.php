
<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Add Lecturer') }}
      </h2>
  </x-slot>

  @if (session()->has('message'))
      <div class="alert bg-red-100 rounded-lg py-5 px-6 mb-3 text-base text-red-700 inline-flex items-center w-full alert-dismissible fade show" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="btn-close box-content w-4 h-4 p-1 ml-auto text-red-900 border-none rounded-none opacity-50 focus:shadow-none focus:outline-none focus:opacity-100 hover:text-red-900 hover:opacity-75 hover:no-underline" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

  <div class="py-12">
      <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
          <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-5">
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

            {{-- <div class="flex items-center mb-4">
              <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
              <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Default checkbox</label>
            </div> --}}
            
            <div class="flex space-x-2 justify-end">
              <button type="submit" class="inline-block px-6 py-2.5 bg-violet-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-violet-700 focus:bg-violet-700 focus:outline-none focus:ring-0 active:bg-violet-800 transition duration-150 ease-in-out" href="{{ route('lecturers.create')}}">
                Save
              </button>
            </div>
              
            </form>
          </div>
      </div>
  </div>
</x-app-layout>