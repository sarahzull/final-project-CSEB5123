<div class="flex flex-col mt-2">
  <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 inline-block min-w-full sm:px-6 lg:px-8">
      <div class="overflow-hidden">
        <table class="min-w-full border border-slate-300">
          <thead class=" bg-slate-50">
            <tr class="font-sans text-center">
              <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300 ">
                Start Date
              </th>
              <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300 ">
                End Date
              </th>
              <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                Duration
              </th>
              <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                Progress
              </th>
              <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                Status
              </th>
              <th scope="col" class="text-base font-medium text-slate-900 px-6 py-2 text-center border border-slate-300">
                
              </th>
            </tr>
          </thead>
          <tbody>
            @foreach ($details as $detail)
            <tr class="bg-white border font-sans text-center">
              <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300 text-center">
                @if ($detail->start_date == NULL)
                  {{ ' ' }}
                @else
                 {{ date('d-m-Y', strtotime($detail->start_date)) }}
                @endif
              </td>
              <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                @if ($detail->end_date == NULL)
                  {{ ' ' }}
                @else
                 {{ date('d-m-Y', strtotime($detail->end_date)) }}
                @endif
              <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                @if ($detail->duration == 1)
                  {{ $detail->duration }} month
                @elseif ($detail->duration == NULL)
                  {{ ' ' }}
                @else
                  {{ $detail->duration }} months
                @endif
              </td>
              <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                @if ($detail->progress == 'Choose a progress')
                  {{ ' ' }}
                @else
                <span class="text-zinc-900">
                  {{ $detail->progress }}
                </span>
                @endif
              </td>
              <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                @if ($detail->status == 'Choose a status')
                  {{ ' ' }}
                @elseif ($detail->status == 'On track')
                  <span class="bg-sky-700 p-2 text-white rounded-md">
                    {{ $detail->status }}
                  </span>
                @elseif ($detail->status == 'Delayed')
                  <span class="bg-rose-700 p-2 text-white rounded-md">
                    {{ $detail->status }}
                  </span>
                @elseif ($detail->status == 'Extended')
                  <span class="bg-amber-700 p-2 text-white rounded-md">
                    {{ $detail->status }}
                  </span>
                @elseif ($detail->status == 'Completed')
                  <span class="bg-emerald-700 p-2 text-white rounded-md">
                    {{ $detail->status }}
                  </span>
                @endif
              </td>
              <td class=" text-gray-900 px-6 py-4 whitespace-nowrap border border-slate-300">
                <div class="flex justify-center gap-3">
                  <div>
                    {{-- {{ route('lecturers.edit', $lecturer->id) }} --}}
                    <a href="" class="text-slate-400 text-sm text-center hover:text-slate-600">
                      <i class="fas fa-edit"></i>
                    </a>
                  </div>
                  <div>
                    <form action="{{ route('details.destroy', $detail->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="text-slate-400 text-sm text-center hover:text-rose-600">
                        <i class="fas fa-trash"></i>
                      </button>
                    </form>
                  </div>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>