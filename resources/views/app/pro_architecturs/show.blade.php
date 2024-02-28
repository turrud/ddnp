<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.pro_architecturs.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a href="{{ route('pro-architecturs.index') }}" class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pro_architecturs.inputs.name')
                        </h5>
                        <span>{{ $proArchitectur->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pro_architecturs.inputs.text')
                        </h5>
                        <span>{{ $proArchitectur->text ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pro_architecturs.inputs.image')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $proArchitectur->image ? \Storage::url($proArchitectur->image) : '' }}"
                            size="150"
                        />
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pro_architecturs.inputs.imgurl')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $proArchitectur->imgurl }}"
                            size="150"
                        />
                        <a
                            class="underline cursor-pointer"
                            target="_blank"
                            href="{{ $proArchitectur->imgurl }}"
                            >{{ $proArchitectur->imgurl ?? '-' }}</a
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pro_architecturs.inputs.url')
                        </h5>
                        <span>{{ $proArchitectur->url ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pro_architecturs.inputs.file')
                        </h5>
                        @if($proArchitectur->file)
                        <a
                            href="{{ \Storage::url($proArchitectur->file) }}"
                            target="blank"
                            ><i class="mr-1 icon ion-md-download"></i
                            >&nbsp;Download</a
                        >
                        @else - @endif
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.pro_architecturs.inputs.video')
                        </h5>
                        <span>{{ $proArchitectur->video ?? '-' }}</span>
                    </div>
                </div>

                <div class="mt-10">
                    <a
                        href="{{ route('pro-architecturs.index') }}"
                        class="button"
                    >
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\ProArchitectur::class)
                    <a
                        href="{{ route('pro-architecturs.create') }}"
                        class="button"
                    >
                        <i class="mr-1 icon ion-md-add"></i>
                        @lang('crud.common.create')
                    </a>
                    @endcan
                </div>
            </x-partials.card>
        </div>
    </div>
</x-app-layout>
