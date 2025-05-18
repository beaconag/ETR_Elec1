@csrf

<div class="mb-4 text-center">
    <label class="form-label d-block mb-2">Profile Image</label>
    @if (!empty($user->profile_image))
        <div class="mb-3">
            <img src="{{ asset('images/users/' . $user->profile_image) }}" alt="Profile Image" class="img-thumbnail" style="max-width: 150px; height: auto;">
        </div>
    @endif
    <input type="file" name="profile_image" class="form-control mx-auto" style="max-width: 300px;">
</div>

<div class="row g-3">
    <div class="col-md-4">
        <label class="form-label">First Name</label>
        <input type="text" name="first_name" class="form-control" value="{{ old('first_name', $user->first_name ?? '') }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">Middle Name</label>
        <input type="text" name="middle_name" class="form-control" value="{{ old('middle_name', $user->middle_name ?? '') }}">
    </div>

    <div class="col-md-4">
        <label class="form-label">Last Name</label>
        <input type="text" name="last_name" class="form-control" value="{{ old('last_name', $user->last_name ?? '') }}">
    </div>
</div>

<div class="mb-3 mt-3">
    <label class="form-label">Birthdate</label>
    <input type="date" name="birthdate" class="form-control" value="{{ old('birthdate', isset($user->birthdate) ? \Carbon\Carbon::parse($user->birthdate)->format('Y-m-d') : '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Address</label>
    <textarea name="address" class="form-control" rows="3">{{ old('address', $user->address ?? '') }}</textarea>
</div>

<div class="mb-3">
    <label class="form-label">Contact Number</label>
    <input type="text" name="contact_number" class="form-control" value="{{ old('contact_number', $user->contact_number ?? '') }}">
</div>

<div class="mb-3">
    <label class="form-label">Email</label>
    <input type="email" name="email" class="form-control" value="{{ old('email', $user->email ?? '') }}">
</div>

@if(!isset($user))
<div class="mb-3">
    <label class="form-label">Password</label>
    <input type="password" name="password" class="form-control">
</div>
@endif

<div class="mb-3">
    <label class="form-label d-block">Role</label>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role" id="role_admin" value="admin"
        {{ old('role', $user->role ?? '') === 'admin' ? 'checked' : '' }}>
        <label class="form-check-label" for="role_admin">Admin</label>
    </div>
    <div class="form-check form-check-inline">
        <input class="form-check-input" type="radio" name="role" id="role_client" value="client"
        {{ old('role', $user->role ?? '') === 'client' ? 'checked' : '' }}>
        <label class="form-check-label" for="role_client">Client</label>
    </div>
</div>

<div class="text-center mt-4">
    <button class="btn btn-success px-5 py-2">{{ $buttonText }}</button>
</div>
