@php
    use App\Models\Rombel;
    use App\Models\Rayon;

    $dataRayon = Rayon::all();
    $dataRombel = Rombel::all();
@endphp

    <div class="form-group">
        <label for="recipient-name" class="col-form-label">Photo :</label>
        <input type="file" class="form-control" name="image" id="image">
    </div>
    <div class="form-group">
        <label for="nis" class="col-form-label">Nis :</label>
        <input type="text" class="form-control" name="nis">
    </div>
    <div class="form-group">
        <label for="name" class="col-form-label">Name :</label>
        <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="rombel" class="col-form-label">Rombel :</label>
        <select class="form-control" name="rombel">
            @foreach ($dataRombel as $item)
              <option>{{ $item->nama_rombel }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="rayon" class="col-form-label">Rayon :</label>
        <select class="form-control" name="rayon">
            @foreach ($dataRayon as $rayon)
              <option value="{{ ucfirst($rayon->nama_rayon) }}">{{ ucfirst($rayon->nama_rayon) }}</option>
            @endforeach
        </select>
    </div>
