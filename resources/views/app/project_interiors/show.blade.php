<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            @lang('crud.project_interiors.show_title')
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-partials.card>
                <x-slot name="title">
                    <a
                        href="{{ route('project-interiors.index') }}"
                        class="mr-4"
                        ><i class="mr-1 icon ion-md-arrow-back"></i
                    ></a>
                </x-slot>

                <div class="mt-4 px-4">
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.project_interiors.inputs.name')
                        </h5>
                        <span>{{ $projectInterior->name ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.project_interiors.inputs.text')
                        </h5>
                        <span>{{ $projectInterior->text ?? '-' }}</span>
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.project_interiors.inputs.image')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $projectInterior->image ? \Storage::url($projectInterior->image) : '' }}"
                            size="150"
                        />
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.project_interiors.inputs.imgurl')
                        </h5>
                        <x-partials.thumbnail
                            src="{{ $projectInterior->imgurl }}"
                            size="150"
                        />
                        <a
                            class="underline cursor-pointer"
                            target="_blank"
                            href="{{ $projectInterior->imgurl }}"
                            >{{ $projectInterior->imgurl ?? '-' }}</a
                        >
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.project_interiors.inputs.file')
                        </h5>
                        @if($projectInterior->file)
                        <a
                            href="{{ \Storage::url($projectInterior->file) }}"
                            target="blank"
                            ><i class="mr-1 icon ion-md-download"></i
                            >&nbsp;Download</a
                        >
                        @else - @endif
                    </div>
                    <div class="mb-4">
                        <h5 class="font-medium text-gray-700">
                            @lang('crud.project_interiors.inputs.video')
                        </h5>
                        <span>{{ $projectInterior->video ?? '-' }}</span>
                    </div>
                </div>

                <div class="mt-10">
                    <a
                        href="{{ route('project-interiors.index') }}"
                        class="button"
                    >
                        <i class="mr-1 icon ion-md-return-left"></i>
                        @lang('crud.common.back')
                    </a>

                    @can('create', App\Models\ProjectInterior::class)
                    <a
                        href="{{ route('project-interiors.create') }}"
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
