<div>
    <div class="card shadow col-sm-6">
        <div class="card-header text-center">
          Request Membership
        </div>
        <div class="card-body">
          <form wire:submit.prevent = "submitMember">
            <div class="form-group">
              <label for="inp-name">Name</label>
              <input type="text"
                class="form-control" wire:model="member.name" id="inp-name" aria-describedby="inp-name" value="{{  old('name') }}"placeholder="name">
              <small id="inp-name" class="form-text text-muted">Please enter name.</small>
              @error('member.name')
                  <span class="text-danger"><br>{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
                <label for="inp-email">Email</label>
                <input type="email"
                  class="form-control" wire:model="member.email" id="inp-email" aria-describedby="inp-email" {{ old('email') }}placeholder="email">
                <small id="inp-email" class="form-text text-muted">Please enter email.</small>
                @error('member.email')
                  <span class="text-danger"><br>{{ $message }}</span>
              @enderror
              </div>
              <div class="form-group">
                <label for="inp-address">Address</label>
                <input type="text"
                  class="form-control" wire:model="member.address" id="inp-address" aria-describedby="inp-address" {{ old('address') }}placeholder="address">
                <small id="inp-address" class="form-text text-muted">Please enter address.</small>
                @error('member.address')
                  <span class="text-danger"><br>{{ $message }}</span>
              @enderror
              </div>
              <div class="form-group">
                <label for="inp-contact">Contact</label>
                <input type="text"
                  class="form-control" wire:model="member.contact" id="inp-contact" aria-describedby="inp-contact" {{ old('contact') }}placeholder="contact">
                <small id="inp-contact" class="form-text text-muted">Please enter contact.</small>
                @error('member.contact')
                  <span class="text-danger"><br>{{ $message }}</span>
              @enderror
              </div>
               <button class="btn btn-primary btn-sm" type="submit">Submit</button>
               <button class="btn btn-secondary btn-sm" type="reset">Clear</button>
           </form>
        </div>
      </div>

    {{-- <div class="card-body">
        <h4>{{ $member[0] }}</h4>
        <button class="btn btn-secondary" wire:click="userShow">show</button>
    </div> --}}
</div>
