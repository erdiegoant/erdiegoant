<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ProjectItem extends Component
{
    public Project $project;

    public bool $isFirst;

    public string $background;

    public ?Media $image = null;

    public function mount(): void
    {
        $this->background = $this->project->background;
        $this->image = $this->project->getFirstMedia('projects');
    }

    public function render()
    {
        return view('livewire.project-item');
    }
}
