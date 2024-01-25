<div>
    <h1>Atualizar Foto</h1>
    <form action="post" wire:submit.prevent="storagePhoto">
        @csrf
        <input type="file"  wire:model="photo">
        @error('photo') {{$message}} @enderror
        <button type="submit">Upload Foto</button>
    </form>
</div>
