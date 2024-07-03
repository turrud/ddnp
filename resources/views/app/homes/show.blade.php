<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.homes.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('homes.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.homes.inputs.name')
                        </h5>
                        <span>{{ $home->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.homes.inputs.text')
                        </h5>
                        <span>{{ $home->text ?? '-' }}</span>
                    </div>
                    {{-- <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.homes.inputs.image')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $home->image ? \Storage::url($home->image) : '' }}"
                            size="150"
                        />
                    </div> --}}
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.homes.inputs.imgurl')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $home->imgurl }}"
                            size="150"
                        />
                        <a
                            class="underline cursor-pointer"
                            target="_blank"
                            href="{{ $home->imgurl }}"
                            >{{ $home->imgurl ?? '-' }}</a
                        >
                    </div>
                    {{-- <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.homes.inputs.file')
                        </h5>
                        @if($home->file)
                        <a
                            href="{{ \Storage::url($home->file) }}"
                            target="blank"
                            ><i class="mr-1 icon ion-md-download"></i
                            >&nbsp;Download</a
                        >
                        @else - @endif
                    </div> --}}
                    {{-- <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.homes.inputs.video')
                        </h5>
                        <a
                            class="underline cursor-pointer"
                            target="_blank"
                            href="{{ $home->video }}"
                            >{{ $home->video ?? '-' }}</a
                        >
                    </div> --}}
                </div>

                <div class="mt-10">
                    <a href="{{ route('homes.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Home::class)
                    <a href="{{ route('homes.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
