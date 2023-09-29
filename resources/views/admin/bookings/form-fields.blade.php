<div class="position-relative mb-3 ml-5">
    <label class="form-label">Tên người dùng</label>
    <input type="text" class="form-control @if($errors->has('name'))is-invalid @endif" name="name" value="{{@old('name', $booking->name ?? '')}}">
    @error('name')
    <div class="invalid-tooltip">
        {{$message}}
    </div>
    @enderror
</div>
<div class="position-relative mb-3 ml-5">
    <label class="form-label">Email</label>
    <input type="text" class="form-control @if($errors->has('email'))is-invalid @endif" name="email" value="{{@old('email', $booking->email ?? '')}}">
    @error('email')
    <div class="invalid-tooltip">
        {{$message}}
    </div>
    @enderror
</div>

<div class="position-relative mb-3 ml-5">
    <label class="form-label">Số điện thoại</label>
    <input type="number" class="form-control @if($errors->has('phone'))is-invalid @endif" minlength="10" maxlength="10"
           name="phone" value="{{@old('phone', $booking->phone ?? '')}}">
    @error('phone')
    <div class="invalid-tooltip">
        {{$message}}
    </div>
    @enderror
</div>

<div class="position-relative mb-3 ml-5">
    <label class="form-label">Điểm đi</label>
    <input type="text" class="form-control @if($errors->has('departure'))is-invalid @endif" name="departure" value="{{@old('departure', $booking->departure ?? '')}}">
    @error('departure')
    <div class="invalid-tooltip">
        {{$message}}
    </div>
    @enderror
</div>
<div class="position-relative mb-3 ml-5">
    <label class="form-label">Điểm đến</label>
    <input type="text" class="form-control @if($errors->has('destination'))is-invalid @endif" name="destination" value="{{@old('destination', $booking->destination ?? '')}}">
    @error('destination')
    <div class="invalid-tooltip">
        {{$message}}
    </div>
    @enderror
</div>
