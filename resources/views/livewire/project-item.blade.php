<div @class(["rounded-lg p-6 break-inside-avoid-column", 'mt-5' => !$isFirst]) @style(["background: $background"])>
    @if(!is_null($image))
        <div class="drop-shadow-lg">
            <div class="overflow-hidden rounded-lg">
                @if(!empty($project->url))
                    <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer">
                        <div class="cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg flex justify-center">
                            {{ $image }}
                        </div>
                    </a>
                @else
                    <div class="cursor-pointer transition duration-200 ease-in-out transform hover:scale-110 rounded-lg flex justify-center">
                        {{ $image }}
                    </div>
                @endif
            </div>
        </div>
    @endif

    @if(!empty($project->url))
        <a href="{{ $project->url }}" target="_blank" rel="noopener noreferrer" class="pt-5 text-[22px] font-semibold text-brand-gray hover:text-purple-500 duration-300 transition block">
            <h3>{{ $project->title }}</h3>
        </a>
    @else
        <span class="pt-5 text-[22px] font-semibold text-brand-gray block">
                <h3>{{ $project->title }}</h3>
            </span>
    @endif
    <span class="leading-relaxed text-brand-gray mt-2 block">
        {{ $project->description }}
    </span>
</div>
