<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.awards.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('awards.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.awards.inputs.name')
                        </h5>
                        <span>{{ $award->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.awards.inputs.text')
                        </h5>
                        <span>{{ $award->text ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.awards.inputs.tanggal')
                        </h5>
                        <span>{{ $award->tanggal ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.awards.inputs.lokasi')
                        </h5>
                        <span>{{ $award->lokasi ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.awards.inputs.image')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $award->image ? \Storage::url($award->image) : '' }}"
                            size="150"
                        />
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.awards.inputs.imgurl')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $award->imgurl }}"
                            size="150"
                        />
                        <a
                            class="underline cursor-pointer"
                            target="_blank"
                            href="{{ $award->imgurl }}"
                            >{{ $award->imgurl ?? '-' }}</a
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.awards.inputs.file')
                        </h5>
                        @if($award->file)
                        <a
                            href="{{ \Storage::url($award->file) }}"
                            target="blank"
                            ><i class="mr-1 icon ion-md-download"></i
                            >&nbsp;Download</a
                        >
                        @else - @endif
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.awards.inputs.video')
                        </h5>
                        <span>{{ $award->video ?? '-' }}</span>
                    </div>
                </div>

                <div class="mt-10">
                    <a href="{{ route('awards.index') }}" class="button">
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\Award::class)
                    <a href="{{ route('awards.create') }}" class="button">
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
