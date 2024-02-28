<div>
    @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form wire:submit.prevent="submit">
        @csrf
        <div class="row">
            <div class="col-md-6">
                @error('name')
                <div class="has-error is-invalid"> <span class="">{{ $message }}</span></div>
                @enderror
                <div class="form-grp">
                    <input type="text" name="name" placeholder="Your name"  id="name" wire:model="name">
                </div>

            </div>
            <div class="col-md-6">
                @error('email')
                <div class="has-error is-invalid"> <span >{{ $message }}</span></div>
                @enderror
                <div class="form-grp">
                    <input type="email" name="email" placeholder="Email"  id="email" wire:model="email">
                </div>

            </div>
            <div class="col-md-12">
                @error('phone')
                <div class="has-error is-invalid"> <span>{{ $message }}</span></div>
                @enderror
                <div class="form-grp">
                    <input type="text" name="phone" placeholder="Phone number"  id="phone" wire:model="phone">
                </div>

            </div>
        </div>
        <div class="form-grp">

            @error('message')
            <div class="has-error is-invalid"> <span>{{ $message }}</span></div>
            @enderror
            <textarea name="message" placeholder="Write message" id="message"  wire:model="message"></textarea>

        </div>

        @error('terms')
        <div class="has-error is-invalid"> <span >{{ $message }}</span></div>
        @enderror
        <div class="form-check">

            <input type="checkbox" name="terms" class="form-check-input" id="checkbox" wire:model="terms">
            <label for="checkbox">I accept <span>Terms & Conditions</span> for processing personal data</label>

        </div>
        <div class="form-submit">
            <input type="submit" value="submit" wire:loading.attr="disabled">
            <div wire:loading>
                <span  class="spinner-grow spinner-grow-sm me-2" role="status" aria-hidden="true"></span>
            </div>

        </div>
    </form>
</div>
