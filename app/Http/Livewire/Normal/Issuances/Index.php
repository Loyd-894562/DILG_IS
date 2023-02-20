<?php

namespace App\Http\Livewire\Normal\Issuances;

use Livewire\Component;
use App\Models\Bohol_Issuance;

class Index extends Component
{
    public $search;
    public $reference_num, $title, $category = 'all';
    public function loadIssuances(){

        $query = Bohol_Issuance::orderBy('created_at', 'desc')
            ->search($this->search);

            if($this->category != 'all'){
                $query->where('category', $this->category);
            }

            if($this->title){
                $query->where('title', $this->title);
            }
            if($this->reference_num){
                $query->where('reference_num', $this->reference_num);
            }

            $issuances = $query->paginate(5);
            return compact('issuances');
    }
    public function render()
    {
        $issuances = Bohol_Issuance::where('title', 'like', '%'.$this->search.'%')
            ->orWhere('reference_num', 'like', '%'.$this->search.'%')
            ->orWhere('category', 'like', '%'.$this->search.'%')
            ->orderBy('created_at', 'desc')->paginate(5);
        return view('livewire.normal.issuances.index', $this->loadIssuances());
    }
}
