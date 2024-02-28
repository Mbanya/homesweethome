<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit.prevent="submit" class="newsletter-form">
        @csrf
{{--        <input type="hidden" value="" id="page" name="page" wire:model="page">--}}
        <ul class="list-wrap">
            <li>
                @error('name')
                <div class="has-error is-invalid"> <span>{{ $message }}</span></div>
                @enderror
                <input type="text" id="name" placeholder="Your name"  name="name" wire:model="name">
            </li>
            <li>
                @error('phone')
                <div class="has-error is-invalid"> <span>{{ $message }}</span></div>
                @enderror
                <input type="text" id="phone" placeholder="Phone number" name="phone" wire:model="phone">
            </li>
            <li class="submit-btn">
                <input type="submit" value="submit">
                <div wire:loading>
                    <span  class="spinner-grow spinner-grow-sm me-2" role="status" aria-hidden="true"></span>
                </div>
            </li>
        </ul>
        @error('terms')
        <div class="has-error is-invalid"> <span >{{ $message }}</span></div>
        @enderror
        <div class="form-check">
            <input type="checkbox" class="form-check-input" id="checkbox" name="terms" wire:model="terms">
            <label for="checkbox">I accept <span>Terms & Conditions</span> for processing personal data</label>
        </div>
    </form>
</div>
