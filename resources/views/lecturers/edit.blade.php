<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Lecturer') }}
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
            
              <div class="p-6">
                <form
                action="{{ route('lecturers.update', $lecturer->id) }}"
                method="POST">
                @csrf
                @method('PATCH')
                  
                <div class="mb-4">
                  <label class="block">
                    <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Name</span>
                    <input type="text" name="name" id="name" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" value="{{ $lecturer->name ?? ''}}">
                  </label>
                </div>

                {{-- <div class="flex items-center mb-4">
                  <input id="default-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 focus:ring-2">
                  <label for="default-checkbox" class="ml-2 text-sm font-medium text-gray-900">Default checkbox</label>
                </div> --}}
              
                <div class="flex space-x-2 justify-end">
                  <button type="submit" class="inline-block px-6 py-2.5 bg-violet-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-violet-700 focus:bg-violet-700 focus:outline-none focus:ring-0 active:bg-violet-800 transition duration-150 ease-in-out" href="{{ route('lecturers.index')}}">
                    Save
                  </button>
                </div>
                </form>
              </div>
          </div>
      </div>
  </div>
</x-app-layout>