<div>
    <div class="col-12">
        @include('admin.alert')
    </div>
    <div class="card card-primary card-outline">
    <div class="card-header">
        <div class="row">
            <div class="col-6">
                <a href="{{ route('admin.branch.view') }}" class="btn btn-secondary btn-sm">Back</a>
            </div>
        </div>
    </div>  
    <form wire:submit.prevent="store">
    @csrf
        <div class="card-body">
            <div class="row">
                <div class="col-4">
                    <label for="branch_name">Branch Name</label>
                    <input type="text" id="branch_name" wire:model="branch_name" class="form-control">
                    @error('branch_name')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                    @enderror

                </div>
                <div class="col-4">
                    <label for="branch_email">Branch Email</label>
                    <input type="email" id="branch_email" wire:model="branch_email" class="form-control">
                    @error('branch_email')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                    @enderror

                </div>
                <div class="col-4">
                <label for="branch_phone">Branch Phone</label>
                    <input type="text" id="branch_phone" wire:model="branch_phone" class="form-control">
                    @error('branch_phone')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-12 mt-3">
                    <label for="branch_address">Branch Address</label>
                    <textarea wire:model="branch_address" id="branch_address" rows="4" class="form-control"></textarea>
                    @error('branch_address')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-6 mt-3">
                <label for="branch_city">Branch City</label>
                    <input type="text" id="branch_city" wire:model="branch_city" class="form-control">
                    @error('branch_city')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-6 mt-3">
                <label for="branch_pin">Branch Pincode</label>
                    <input type="text" id="branch_pin" wire:model="branch_pin" class="form-control">
                    @error('branch_pin')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-6 mt-3">
                <label for="branch_password">Branch Password</label>
                    <input type="password" id="branch_password" wire:model="branch_password" class="form-control">
                    @error('branch_password')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                    @enderror
                </div>
                <div class="col-6 mt-3">
                <label for="confirm_password">Confirm Password</label>
                    <input type="password" id="confirm_password" wire:model="confirm_password" class="form-control">
                    @error('confirm_password')
                        <small class="text-danger">
                        {{ $message }}
                        </small>
                    @enderror
                </div>

            </div>
        </div>
        <div class="card-footer">
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary">Save Branch</button>
                </div>
                <div class="col-6 text-right" wire:loading wire:target="store">
                <div class="spinner-border" role="status">
                    <span class="sr-only">Loading...</span>
                </div>
                
                </div>
            </div>
        </div>
    </form>
    </div>
</div>
