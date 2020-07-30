@if (isset($siswa))
    {!! Form::hidden('id', $shops->id) !!}
@endif


<!-- NISN -->
@if ($errors->any())
<div class="form-group {{ $errors->has('id_ukm') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('id_ukm', 'id_ukm:', ['class' => 'control-label']) !!}
     {!! Form::text('id_ukm', null, ['class' => 'form-control']) !!}
     @if ($errors->has('id_ukm'))
        <span class="help-block">{{ $errors->first('id_ukm') }}</span>
     @endif
</div>


<!-- NAMA -->
@if ($errors->any())
<div class="form-group {{ $errors->has('nama_ukm') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('nama_ukm', 'nama_ukm:', ['class' => 'control-label']) !!}
     {!! Form::text('nama_ukm', null, ['class' => 'form-control']) !!}
     @if ($errors->has('nama_ukm'))
        <span class="help-block">{{ $errors->first('nama_ukm') }}</span>
     @endif
</div>

<!-- NAMA -->
@if ($errors->any())
<div class="form-group {{ $errors->has('alamat') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
     {!! Form::label('alamat', 'alamat:', ['class' => 'control-label']) !!}
     {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
     @if ($errors->has('alamat'))
        <span class="help-block">{{ $errors->first('alamat') }}</span>
     @endif
</div>


<!-- TELEPON -->
@if ($errors->any())
<div class="form-group {{ $errors->has('nomor_telepon') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
    {!! Form::label('nomor_telepon', 'Telepon:', ['class' => 'control-label']) !!}
    {!! Form::text('nomor_telepon', null, ['class' => 'form-control']) !!}
    @if ($errors->has('nomor_telepon'))
    <span class="help-block">{{ $errors->first('nomor_telepon') }}</span>
    @endif
</div>




<!-- FOTO -->
@if ($errors->any())
<div class="form-group {{ $errors->has('tampilan') ? 'has-error' : 'has-success' }}">
@else
<div class="form-group">
@endif
    {!! Form::label('tampilan', 'tampilan:') !!}
    {!! Form::file('tampilan') !!}
    @if ($errors->has('tampilan'))
        <span class="help-block">{{ $errors->first('tampilan') }}</span>
    @endif

    <!-- MENAMPILKAN FOTO -->
    @if (isset($shops))
        @if (isset($images->tampilan))
            <img src="{{ asset('images/' . $shops->tampilan) }}">
        @else
            @if ($images->tampilan == 'L')
                <img src="{{ asset('images/kelontong2.jpg') }}">
            @else
                <img src="{{ asset('images/kelontong1.jpg') }}">
            @endif
        @endif
    @endif
</div>

<!-- SUBMIT -->
<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-primary form-control']) !!}
</div>