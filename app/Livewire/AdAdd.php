<?php

namespace App\Livewire;

use App\Models\Ad;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdAdd extends Component
{
    use WithFileUploads;

    #[Validate]
    public $name;

    #[Validate]
    public $image;

    public function removeImage()
    {
        $this->image = null;
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif,bmp|max:20480',
        ];
    }

    public function submit()
    {
        $this->validate();
        $ad = Ad::create([
            'name' => $this->name,
        ]);

        if ($this->image) {
            $ad->addMedia($this->image->getRealPath())
                ->usingFileName($this->image->getClientOriginalName())
                ->toMediaCollection('ad_image');
        }
        return redirect()->route('all-ads')->with([
            'status' => 'success',
            'message' => 'Ad Added Successfully',
        ]);
    }

    public function render()
    {
        return view('livewire.ad-add');
    }
}
