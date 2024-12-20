<?php

namespace App\Livewire;

use App\Models\Ad;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AdEdit extends Component
{
    use WithFileUploads;

    public $ad;

    #[Validate]
    public $name;

    #[Validate]
    public $image;

    public function mount(Ad $ad)
    {
        $this->ad = $ad;
        $this->name = $ad->name;
    }

    protected function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'image' => 'image|mimes:jpeg,jpg,png,gif,bmp|max:20480',
        ];
    }

    public function removeImage()
    {
        $this->image = null;
    }

    public function submit()
    {
        $this->validate();
        $this->ad->update([
            'name' => $this->name,
        ]);

        if ($this->image) {
            $this->ad->clearMediaCollection('ad_image');
            $this->ad->addMedia($this->image->getRealPath())
                ->usingFileName($this->image->getClientOriginalName())
                ->toMediaCollection('ad_image');
        }
        return redirect()->route('all-ads')->with([
            'status' => 'success',
            'message' => 'Ad Updated Successfully',
        ]);
    }
    public function render()
    {
        return view('livewire.ad-edit');
    }
}
