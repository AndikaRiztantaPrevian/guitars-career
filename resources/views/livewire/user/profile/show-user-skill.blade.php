<div>
  <div class="box-tags mt-30">
    @foreach ($userSkills as $data)
      <a class="btn btn-grey-small mr-10">
        {{ $data->skill->name }}
        <span class="close-icon" wire:click="deleteSkill({{ $data->id }})"></span>
      </a>
    @endforeach
  </div>
</div>
