<div>
	<form>
		<label>Poll Title</label>
		<input type="text" wire:model.live="title" />
		Current title: {{ $title }}

		<div class="mb-4">
			<button class="btn mt-4" wire:click.prevent="addOption">Add Option</button>
		</div>

		<div class="mt-4">
			@foreach ($options as $index => $option)
				<div class="mb-4">
					{{ $index }} - {{ $option }}
				</div>
			@endforeach
		</div>
	</form>
</div>
