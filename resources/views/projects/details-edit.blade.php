<x-app-layout>
  <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Edit Activity') }}
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
            <div class="flex space-x-2 justify-between">
              <div>
                <a href="{{ route('projects.show', $details->project_id) }}" class="text-slate-400 text-sm text-center hover:text-slate-600" aria-hidden="true">
                  <i class="fa-solid fa-arrow-left"></i>
                </a>
              </div>
            </div>

            <div class="p-6 text-gray-900">
              <form
              action="{{ route('details.update', $details->id) }}"
              method="POST">
              @csrf
              @method('PATCH')
              
              <div class="mb-4">
                <label class="block">
                  <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Start Date</span>
                  <input type="date" name="start_date" id="start_date" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" value="{{ $details->start_date ?? '' }}">
                </label>
              </div>

              <div class="mb-4">
                <label class="block">
                  <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">End Date</span>
                  <input type="text" name="end_date" id="end_date" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1" value="{{ $details->end_date ?? '' }}">
                </label>
            </div>

              <div class="mb-4">
                <label class="block">
                  <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Duration (month)</span>
                  <input type="number" name="duration" id="duration" class="mt-1 px-3 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1 disabled:bg-slate-50 disabled:text-slate-500 disabled:border-slate-200 disabled:shadow-none" min="0" value="{{ $details->duration ?? '' }}">
                </label>
              </div>

              <div class="mb-4">
                <label class="block">
                  <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Progress</span>
                  <select id="progress" name="progress" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    {{-- <option @if ($details->progress == " ") {{ 'selected' }} @endif>Choose a progress</option> --}}
                    <option value="Milestone 1" @if ($details->progress == "Milestone 1") {{ 'selected' }} @endif>Milestone 1</option>
                    <option value="Milestone 2" @if ($details->progress == "Milestone 2") {{ 'selected' }} @endif>Milestone 2</option>
                    <option value="Final Report" @if ($details->progress == "Final Report") {{ 'selected' }} @endif>Final Report</option>
                  </select>
                </label>
              </div>

              <div class="mb-4">
                <label class="block">
                  <span class="block text-sm font-medium text-slate-700 after:content-['*'] after:ml-0.5 after:text-red-500">Status</span>
                  <select id="status" name="status" class="mt-1 px-4 py-2 bg-white border shadow-sm border-slate-300 placeholder-slate-400 focus:outline-none focus:border-sky-500 focus:ring-sky-500 block w-full rounded-md sm:text-sm focus:ring-1">
                    <option value="On track" @if ($details->status == "On track") {{ 'selected' }} @endif>On track</option>
                    <option value="Delayed" @if ($details->status == "Delayed") {{ 'selected' }} @endif>Delayed</option>
                    <option value="Extended" @if ($details->status == "Extended") {{ 'selected' }} @endif>Extended</option>
                    <option value="Completed" @if ($details->status == "Completed") {{ 'selected' }} @endif>Completed</option>
                  </select>
                </label>
              </div>
          
              <div class="flex space-x-2 justify-end">
                <button type="submit" class="inline-block px-6 py-2.5 bg-cyan-500 text-white font-semibold text-xs leading-tight uppercase rounded hover:bg-cyan-700 focus:bg-cyan-700 focus:outline-none focus:ring-0 active:bg-cyan-800 transition duration-150 ease-in-out" href="{{ route('projects.show', $details->project_id) }}">
                  Update
                </button>
              </div>
            
              </form>
            </div>
          </div>
      </div>
  </div>

  <script>
    flatpickr('#start_date', {
        defaultDate: '{{ $details->start_date }}',
        altInput: true,
        altFormat: 'j F, Y'
    });

    flatpickr('#end_date', {
      defaultDate: '{{ $details->end_date }}',
        altInput: true,
        altFormat: 'j F, Y'
    });
  </script>
</x-app-layout>