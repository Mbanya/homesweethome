<div>
    <select wire:model="selectedCity">
        <option value="" disabled>Select City</option>
        @foreach ($cities as $city)
            <option value="{{ $city->id }}">{{ $city->name }}</option>
        @endforeach
    </select>
</div>
