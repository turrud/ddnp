<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.homes.index_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <div class="mb-5 mt-4">
                    <div class="flex flex-wrap justify-between">
                        <div class="md:w-1/2">
                            <form>
                                <div class="flex items-center w-full">
                                    <x-inputs.text
                                        name="search"
                                        value="{{ $search ?? '' }}"
                                        placeholder="{{ __('crud.common.search') }}"
                                        autocomplete="off"
                                    ></x-inputs.text>

                                    <div class="ml-1">
                                        <button
                                            type="submit"
                                            class="button button-primary"
                                        >
                                            <i class="icon ion-md-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="md:w-1/2 text-right">
                            @can('create', App\Models\Home::class)
                            <a
                                href="{{ route('homes.create') }}"
                                class="button button-primary"
                            >
                                <i class="mr-1 icon ion-md-add"></i>
                                @lang('crud.common.create')
                            </a>
                            @endcan
                        </div>
                    </div>
                </div>

                <div class="block w-full overflow-auto scrolling-touch">
                    <table class="w-full max-w-full mb-4 bg-transparent">
                        <thead class="text-gray-700">
                            <tr>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.homes.inputs.name')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.homes.inputs.text')
                                </th>
                                {{-- <th class="px-4 py-3 text-left">
                                    @lang('crud.homes.inputs.image')
                                </th> --}}
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.homes.inputs.imgurl')
                                </th>
                                {{-- <th class="px-4 py-3 text-left">
                                    @lang('crud.homes.inputs.file')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.homes.inputs.video')
                                </th> --}}
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @forelse($homes as $home)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-left">
                                    {{ $home->name ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ $home->text ?? '-' }}
                                </td>
                                {{-- <td class="px-4 py-3 text-left">
                                    <x-partials.thumbnail
                                        src="{{ $home->image ? \Storage::url($home->image) : '' }}"
                                    />
                                </td> --}}
                                <td class="px-4 py-3 text-left">
                                    <x-partials.thumbnail
                                        src="{{ $home->imgurl}}"
                                    />
                                </td>
                                <td class="px-4 py-3 text-left">
                                    <a
                                        class="underline cursor-pointer"
                                        target="_blank"
                                        href="{{ $home->imgurl }}"
                                        >{{ $home->imgurl ?? '-' }}</a
                                    >
                                </td>
                                {{-- <td class="px-4 py-3 text-left">
                                    @if($home->file)
                                    <a
                                        href="{{ \Storage::url($home->file) }}"
                                        target="blank"
                                        ><i
                                            class="mr-1 icon ion-md-download"
                                        ></i
                                        >&nbsp;Download</a
                                    >
                                    @else - @endif
                                </td> --}}
                                {{-- <td class="px-4 py-3 text-left">
                                    <a
                                        class="underline cursor-pointer"
                                        target="_blank"
                                        href="{{ $home->video }}"
                                        >{{ $home->video ?? '-' }}</a
                                    >
                                </td> --}}
                                <td
                                    class="px-4 py-3 text-center"
                                    style="width: 134px;"
                                >
                                    <div
                                        role="group"
                                        aria-label="Row Actions"
                                        class="
                                            relative
                                            inline-flex
                                            align-middle
                                        "
                                    >
                                        @can('update', $home)
                                        <a
                                            href="{{ route('homes.edit', $home) }}"
                                            class="mr-1"
                                        >
                                            <button
                                                type="button"
                                                class="button"
                                            >
                                                <i
                                                    class="icon ion-md-create"
                                                ></i>
                                            </button>
                                        </a>
                                        @endcan @can('view', $home)
                                        <a
                                            href="{{ route('homes.show', $home) }}"
                                            class="mr-1"
                                        >
                                            <button
                                                type="button"
                                                class="button"
                                            >
                                                <i class="icon ion-md-eye"></i>
                                            </button>
                                        </a>
                                        @endcan @can('delete', $home)
                                        <form
                                            action="{{ route('homes.destroy', $home) }}"
                                            method="POST"
                                            onsubmit="return confirm('{{ __('crud.common.are_you_sure') }}')"
                                        >
                                            @csrf @method('DELETE')
                                            <button
                                                type="submit"
                                                class="button"
                                            >
                                                <i
                                                    class="
                                                        icon
                                                        ion-md-trash
                                                        text-red-600
                                                    "
                                                ></i>
                                            </button>
                                        </form>
                                        @endcan
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="7">
                                    @lang('crud.common.no_items_found')
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <div class="mt-10 px-4">
                                        {!! $homes->render() !!}
                                    </div>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
