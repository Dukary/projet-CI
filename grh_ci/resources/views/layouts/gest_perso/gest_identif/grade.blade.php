<div class="col-md-3">
    <div class="form-floating">
        <select class="form-select" name="grade" aria-label="Default select example">
            <option selected>---</option>
            @foreach($grade as $g)
                <option value="{{ $g->titre }}" @if(@$p[0]->grade == $g->titre) selected @endif>{{ $g->titre }}</option>
            @endforeach
        </select>
        <label for="floatingName">Grade</label>
    </div>
</div>
