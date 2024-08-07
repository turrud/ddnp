@php $editing = isset($home) @endphp

<div class="flex flex-wrap">
    <x-inputs.group class="w-full">
        <x-inputs.text
            name="name"
            label="Name"
            :value="old('name', ($editing ? $home->name : ''))"
            maxlength="255"
            placeholder="Name"
        ></x-inputs.text>
    </x-inputs.group>

    <x-inputs.group class="w-full">
        <x-inputs.textarea name="text" label="Text" maxlength="255"
            >{{ old('text', ($editing ? $home->text : '')) }}</x-inputs.textarea
        >
    </x-inputs.group>

    {{-- <x-inputs.group class="w-full">
        <div
            x-data="imageViewer('{{ $editing && $home->image ? \Storage::url($home->image) : '' }}')"
        >
            <x-inputs.partials.label
                name="image"
                label="Image"
            ></x-inputs.partials.label
            ><br />

            <!-- Show the image -->
            <template x-if="imageUrl">
                <img
                    :src="imageUrl"
                    class="object-cover rounded border border-gray-200"
                    style="width: 100px; height: 100px;"
                />
            </template>

            <!-- Show the gray box when image is not available -->
            <template x-if="!imageUrl">
                <div
                    class="border rounded border-gray-200 bg-gray-100"
                    style="width: 100px; height: 100px;"
                ></div>
            </template>

            <div class="mt-2">
                <input
                    type="file"
                    name="image"
                    id="image"
                    @change="fileChosen"
                />
            </div>

            @error('image') @include('components.inputs.partials.error')
            @enderror
        </div>
    </x-inputs.group> --}}

    <x-inputs.group class="w-full">
        <x-inputs.url
            name="imgurl"
            label="Imgurl"
            :value="old('imgurl', ($editing ? $home->imgurl : ''))"
            maxlength="255"
            placeholder="Imgurl"
        ></x-inputs.url>
    </x-inputs.group>

    {{-- <x-inputs.group class="w-full">
        <x-inputs.partials.label
            name="file"
            label="File"
        ></x-inputs.partials.label
        ><br />

        <input type="file" name="file" id="file" class="form-control-file" />

        @if($editing && $home->file)
        <div class="mt-2">
            <a href="{{ \Storage::url($home->file) }}" target="_blank"
                ><i class="icon ion-md-download"></i>&nbsp;Download</a
            >
        </div>
        @endif @error('file') @include('components.inputs.partials.error')
        @enderror
    </x-inputs.group> --}}

    {{-- <x-inputs.group class="w-full">
        <x-inputs.url
            name="video"
            label="Video"
            :value="old('video', ($editing ? $home->video : ''))"
            maxlength="255"
            placeholder="Video"
        ></x-inputs.url>
    </x-inputs.group> --}}
</div>
