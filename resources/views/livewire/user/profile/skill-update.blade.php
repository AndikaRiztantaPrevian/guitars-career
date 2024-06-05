<div>
  <div class="form-contact">
    @if (session()->has('message'))
      <div class="alert alert-success alert-dismissible" role="alert">
        <div>{{ session('message') }}</div>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <form wire:submit="save">
      <div class="form-group" wire:ignore>
        <select id="selectedSkills"
          class="form-input mr-10 @error('selectedSkills') is-invalid @elseif($this->selectedSkills == null) @else is-valid @enderror"
          wire:model="selectedSkills" data-placeholder="Pilih keterampilan" multiple>
          @foreach ($skills as $data)
            <option value="{{ $data->id }}">{{ $data->name }}</option>
          @endforeach
        </select>
        @error('selectedSkills')
          <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
          </span>
        @enderror
      </div>
      <button type="submit" class="btn btn-sm btn-apply-big">Simpan</button>
    </form>
  </div>

  @script()
    <script>
      $(document).ready(function() {
        $('#selectedSkills').select2();

        $('#selectedSkills').on('change', function() {
          let data = $(this).val();
          $wire.set('selectedSkills', data);
        });
      });
    </script>
  @endscript
</div>
