<div>
    @if(count($projects) > 1)
        <h2 class="text-[35px] font-bold font-serif pt-12 pb-5">
            My Projects
        </h2>
        <div class="flex flex-col md:block md:columns-2 md:gap-5">
            @foreach($projects as $project)
                <livewire:project-item :$project :key="$project->id" :is-first="$loop->first"/>
            @endforeach
        </div>
    @endif
</div>
