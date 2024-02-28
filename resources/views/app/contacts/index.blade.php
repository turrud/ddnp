<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.contacts.index_title')
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
                            @can('create', App\Models\Contact::class)
                            <a
                                href="{{ route('contacts.create') }}"
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
                                    @lang('crud.contacts.inputs.name')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.contacts.inputs.email')
                                </th>
                                <th class="px-4 py-3 text-right">
                                    @lang('crud.contacts.inputs.nomor_telepon')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.contacts.inputs.date')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    Created
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.contacts.inputs.text')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.contacts.inputs.image')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.contacts.inputs.video')
                                </th>
                                <th class="px-4 py-3 text-left">
                                    @lang('crud.contacts.inputs.file')
                                </th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600">
                            @forelse($contacts as $contact)
                            <tr class="hover:bg-gray-50">
                                <td class="px-4 py-3 text-left">
                                    {{ $contact->name ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ $contact->email ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-right">
                                    {{ $contact->nomor_telepon ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ $contact->date ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ $contact->created_at->diffForHumans() ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    {{ $contact->text ?? '-' }}
                                </td>
                                <td class="px-4 py-3 text-left">
                                    <x-partials.thumbnail
                                        src="{{ $contact->image ? \Storage::url($contact->image) : '' }}"
                                    />
                                </td>
                                <td class="px-4 py-3 text-left">
                                    <a
                                        class="underline cursor-pointer"
                                        target="_blank"
                                        href="{{ $contact->video }}"
                                        >{{ $contact->video ?? '-' }}</a
                                    >
                                </td>
                                <td class="px-4 py-3 text-left">
                                    @if($contact->file)
                                    <a
                                        href="{{ \Storage::url($contact->file) }}"
                                        target="blank"
                                        ><i
                                            class="mr-1 icon ion-md-download"
                                        ></i
                                        >&nbsp;Download</a
                                    >
                                    @else - @endif
                                </td>
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
                                        @can('update', $contact)
                                        <a
                                            href="{{ route('contacts.edit', $contact) }}"
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
                                        @endcan @can('view', $contact)
                                        <a
                                            href="{{ route('contacts.show', $contact) }}"
                                            class="mr-1"
                                        >
                                            <button
                                                type="button"
                                                class="button"
                                            >
                                                <i class="icon ion-md-eye"></i>
                                            </button>
                                        </a>
                                        @endcan @can('delete', $contact)
                                        <form
                                            action="{{ route('contacts.destroy', $contact) }}"
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
                                <td colspan="9">
                                    @lang('crud.common.no_items_found')
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="9">
                                    <div class="mt-10 px-4">
                                        {!! $contacts->render() !!}
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
