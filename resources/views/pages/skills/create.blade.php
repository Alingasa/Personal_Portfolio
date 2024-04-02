<div class="modal fade" id="addSkillModal" tabindex="-1" aria-labelledby="addSkillModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addSkillModalLabel">Add Skills</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('skills.store')}}" enctype="multipart/form-data" method="POST">
          @csrf
          <div class="mb-3">
            <label for="firstName" class="form-label">Name</label>
            <input type="text" class="form-control" id="firstName" name="skill_name" required>
          </div>
          <div class="mb-3">
            <label for="firstName" class="form-label">Percentage</label>
            <input type="number" class="form-control" id="firstName" name="percentage" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        </form>
      </div>
    </div>
  </div>
</div>
