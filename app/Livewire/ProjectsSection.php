<?php

namespace App\Livewire;

use App\Models\Project;
use Livewire\Component;

class ProjectsSection extends Component
{
    /**
     * @var Project[] $projects
     */
    public $projects = [];

    public function mount(): void
    {
        $this->projects = Project::whereActive(true)->latest()->take(5)->get();
    }

    public function render()
    {
        return view('livewire.projects-section');
    }
}
