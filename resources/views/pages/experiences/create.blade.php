<div class="modal fade" id="addInterestModal" tabindex="-1" aria-labelledby="addInterestModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addInterestModalLabel">Add Experience</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        @if($errors->any())
          @include('layouts.sweetalert.error')
        @endif
        <form action="{{route('experiences.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="mb-3">
            <label for="userImage" class="form-label">Choose Image</label>
            <input type="file" class="form-control @error('experience_name') is-invalid @enderror" id="userImage" name="experience_image" >
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Name</label>
            <input type="text" class="form-control @error('experience_name') is-invalid @enderror" id="firstName" name="experience_name" >
          </div>
          <div class="text-center mb-3">
            <label for="description" class="form-label"><strong>Description</strong></label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="4" placeholder="Enter your description"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
