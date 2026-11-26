@extends('admin.layouts.master')
@section('title')
Create Staff
@endsection
@section('page_css')
<style>
.pf-staff-form-page{max-width:1120px!important}
.pf-staff-hero{display:flex;justify-content:space-between;gap:18px;flex-wrap:wrap;align-items:center;margin:0 0 22px}
.pf-staff-hero span{font-size:10px;color:#f46226;font-weight:800;letter-spacing:.15em}
.pf-staff-hero h1{font-size:28px;font-weight:800;color:#171936;margin:7px 0}
.pf-staff-hero p{font-size:12px;color:#7c8492;line-height:1.65}
.pf-staff-back{padding:10px 16px;border:1px solid #e4e7ee;border-radius:8px;background:#fff;color:#272c45;text-decoration:none;font-weight:800;font-size:12px}
.pf-staff-card{background:#fff;border:1px solid #e9eaf0;border-radius:13px;padding:29px;box-shadow:0 5px 23px #20234008}
.pf-staff-card h2{font-size:17px;font-weight:800;color:#1c203c;margin:0 0 7px}
.pf-staff-card .pf-hint{font-size:12px;color:#838b9a;margin:0 0 25px;line-height:1.6}
.pf-staff-fields{display:grid;grid-template-columns:repeat(2,minmax(0,1fr));gap:20px}
.pf-staff-field{min-width:0}
.pf-staff-field label{display:block;margin-bottom:9px;font-size:12px;font-weight:800;color:#505a6e}
.pf-staff-field input,.pf-staff-field select{width:100%;min-height:47px}
.pf-staff-field small{display:block;font-size:11px;color:#8b91a0;margin-top:7px;line-height:1.5}
.pf-staff-field .pf-staff-error{color:#c33838}
.pf-staff-wide{grid-column:1 / -1}
.pf-staff-note{background:#fff8f2;border:1px solid #fae0d1;padding:16px 18px;color:#6c5960;font-size:12px;border-radius:8px;line-height:1.75;margin-top:24px}
.pf-staff-note strong{color:#cf4c1d}
.pf-staff-photo{display:flex;align-items:center;gap:17px;flex-wrap:wrap}
.pf-staff-photo img{width:66px;height:66px;object-fit:cover;border-radius:11px;background:#f1f2f5}
.pf-staff-actions{display:flex;justify-content:flex-end;align-items:center;gap:14px;margin-top:25px;border-top:1px solid #eff0f4;padding-top:23px}
.pf-staff-actions button{background:#f46226!important;color:#fff;padding:12px 23px;border-radius:8px;font-size:12px;font-weight:800}
.pf-staff-actions a{font-size:12px;color:#646d7a;text-decoration:none;font-weight:700}
@media(max-width:650px){.pf-staff-fields{grid-template-columns:1fr}.pf-staff-card{padding:20px 16px}.pf-staff-hero h1{font-size:24px}}
</style>
@endsection

@section('adminContent')
<div class="pf-admin-page pf-staff-form-page">
  <div class="pf-staff-hero">
    <div><span>HUMAN RESOURCES / STAFF</span><h1>Add Staff Member</h1><p>Add a team member. Their staff ID will be generated automatically.</p></div>
    <a class="pf-staff-back" href="{{ route('admin.user.index') }}">← Staff List</a>
  </div>
  @if($errors->any())
    <div role="alert" style="padding:14px 18px;background:#fff0ef;border:1px solid #ffd6d3;border-radius:9px;color:#b32626;margin-bottom:17px;font-size:12px">
      Please correct the highlighted fields before submitting.
    </div>
  @endif
  <div class="pf-staff-card">
    <h2>Staff Information</h2>
    <p class="pf-hint">Only the essential information is required. A profile photo can be added now or later.</p>
    <form method="POST" action="{{ route("admin.user.store") }}" enctype="multipart/form-data">
      @csrf
      
      <div class="pf-staff-fields">
        
        <div class="pf-staff-field"><label for="first_name">First Name <span style="color:#f46226">*</span></label><input id="first_name" type="text" name="first_name" maxlength="100" required autocomplete="given-name" value="{{ old('first_name') }}" placeholder="First name">@error('first_name')<small class="pf-staff-error">{{ $message }}</small>@enderror</div>
        <div class="pf-staff-field"><label for="last_name">Last Name</label><input id="last_name" type="text" name="last_name" maxlength="100" autocomplete="family-name" value="{{ old('last_name') }}" placeholder="Last name"><small>Optional</small>@error('last_name')<small class="pf-staff-error">{{ $message }}</small>@enderror</div>
        <div class="pf-staff-field"><label for="email">Email Address <span style="color:#f46226">*</span></label><input id="email" name="email" type="email" maxlength="255" required autocomplete="email" value="{{ old('email') }}" placeholder="name@example.org"><small>Used for login and password setup.</small>@error('email')<small class="pf-staff-error">{{ $message }}</small>@enderror</div>
        <div class="pf-staff-field"><label for="staff-role">Access Role <span style="color:#f46226">*</span></label><select id="staff-role" name="roles[]" required><option value="">Select a role</option>
          @foreach($roles as $role)
            <option value="{{ $role->id }}" {{ (string) old('roles.0') === (string) $role->id ? 'selected' : '' }}>{{ $role->name }}</option>
          @endforeach
        </select><small>Controls which admin modules this staff member can access.</small>@error('roles')<small class="pf-staff-error">{{ $message }}</small>@enderror @error('roles.0')<small class="pf-staff-error">{{ $message }}</small>@enderror</div>
        <div class="pf-staff-field pf-staff-wide"><label for="attach">Profile Photo (optional)</label><div class="pf-staff-photo">
        
        <input id="attach" name="attach" type="file" accept="image/png,image/jpeg,image/webp"><small>JPG, PNG or WebP, maximum 2 MB.</small></div>@error('attach')<small class="pf-staff-error">{{ $message }}</small>@enderror</div>
      </div>
      <div class="pf-staff-note"><strong>Secure onboarding:</strong> The system creates a Staff ID and sends a one-time password setup link to the email address above. No password is displayed or shared.</div>
      <div class="pf-staff-actions"><a href="{{ route('admin.user.index') }}">Cancel</a><button type="submit">Create Staff & Send Invite <span aria-hidden="true">↗</span></button></div>
    </form>
  </div>
</div>
@endsection