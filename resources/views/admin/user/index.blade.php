@extends('admin.layouts.master')
@section('title')
Staff Management
@endsection
@section('page_css')
<style>
.pf-staff-list{max-width:1550px!important}
.pf-staff-list .staff-heading{display:flex;align-items:center;justify-content:space-between;flex-wrap:wrap;gap:18px;margin-bottom:23px}
.pf-staff-list .staff-heading small{font-size:10px;letter-spacing:.14em;color:#f46226;font-weight:800}
.pf-staff-list .staff-heading h1{color:#1a1c39;font-family:'Manrope',sans-serif;font-weight:800;font-size:28px;margin:7px 0}
.pf-staff-list .staff-heading p{font-size:12px;color:#838b99;line-height:1.6;margin:0}
.pf-staff-list .staff-new{display:inline-flex;align-items:center;gap:9px;background:#f46226;color:white;padding:12px 17px;border-radius:8px;font-size:12px;font-weight:800;text-decoration:none}
.pf-staff-list .staff-new:hover{background:#dd4e1b}
.pf-staff-list .staff-alert{padding:13px 17px;border-radius:9px;font-size:12px;margin:0 0 18px}
.pf-staff-list .staff-alert.success{border:1px solid #bce4d5;color:#176c4c;background:#edf9f4}
.pf-staff-list .staff-alert.warning{border:1px solid #f7d6b7;color:#93511c;background:#fffaef}
.pf-staff-list .staff-alert.error{border:1px solid #ffcfce;color:#ad3333;background:#fff4f2}
.pf-staff-list .staff-panel{background:#fff;border:1px solid #e9eaf0;border-radius:12px;overflow:hidden;box-shadow:0 4px 24px #20234009}
.pf-staff-list .staff-panel-head{padding:21px 23px;border-bottom:1px solid #eceef3;display:flex;justify-content:space-between;gap:15px;align-items:center}
.pf-staff-list .staff-panel-head h2{font-size:17px;font-weight:800;color:#191c39;margin:0}
.pf-staff-list .staff-panel-head span{font-size:11px;color:#8b91a0}
.pf-staff-list .staff-table-wrap{width:100%;overflow-x:auto}
.pf-staff-list .staff-table{border-collapse:collapse;width:100%;min-width:790px}
.pf-staff-list .staff-table th{text-align:left;font-size:10px;color:#777f8e;letter-spacing:.075em;font-weight:800;text-transform:uppercase;background:#f9fafc!important;padding:16px!important;border-bottom:1px solid #e9eaf0!important}
.pf-staff-list .staff-table td{padding:15px 16px!important;font-size:12px;color:#4e5667;border-bottom:1px solid #f0f1f4!important;vertical-align:middle}
.pf-staff-list .staff-table tr:last-child td{border:0!important}
.pf-staff-list .staff-person{display:flex;align-items:center;gap:12px}
.pf-staff-list .staff-avatar{height:38px;width:38px;border-radius:10px;display:grid;place-items:center;background:#eff0f9;color:#373761;font-weight:800;font-size:13px;overflow:hidden;flex:none}
.pf-staff-list .staff-avatar img{height:100%;width:100%;object-fit:cover}
.pf-staff-list .staff-person strong{display:block;font-weight:800;color:#232742}
.pf-staff-list .staff-person small{font-size:10px;color:#8c94a4}
.pf-staff-list .staff-role{display:inline-block;background:#f0eeff;color:#5b53a2;padding:6px 9px;border-radius:20px;font-weight:800;font-size:10px}
.pf-staff-list .staff-status{display:inline-block;background:#e7f8f0;color:#23865b;padding:6px 9px;border-radius:20px;font-weight:800;font-size:10px}
.pf-staff-list .staff-status.off{background:#fff0ed;color:#c2503b}
.pf-staff-list .staff-actions{display:flex;gap:8px;align-items:center;flex-wrap:wrap}
.pf-staff-list .staff-actions :is(a,button){display:inline-flex;justify-content:center;align-items:center;gap:6px;min-height:34px;background:#f7f8fc;border:1px solid #e7e8ef;color:#323750;padding:8px 10px;font-size:11px;font-weight:800;border-radius:7px;text-decoration:none;cursor:pointer}
.pf-staff-list .staff-actions :is(a,button):hover{border-color:#f46226;color:#e75b24}
.pf-staff-list .staff-actions .danger{background:#fff5f4;color:#bd4439;border-color:#ffe2dc}
.pf-staff-list .staff-empty{padding:45px 20px;text-align:center;color:#828b99;font-size:13px}
@media(max-width:650px){.pf-staff-list .staff-heading h1{font-size:25px}.pf-staff-list .staff-panel-head{padding:17px}.pf-staff-list .staff-table td,.pf-staff-list .staff-table th{padding:12px!important}}
</style>
@endsection
@section('adminContent')
<div class="pf-admin-page pf-staff-list">
  <div class="staff-heading">
    <div><small>HUMAN RESOURCES / ACCESS MANAGEMENT</small><h1>Staff Management</h1><p>Manage team members, access roles and secure sign-in invitations.</p></div>
    @can('user-create')<a class="staff-new" href="{{ route('admin.user.create') }}"><i class="fa-solid fa-plus"></i> Add Staff Member</a>@endcan
  </div>
  @if(session('status'))<div role="status" class="staff-alert success">{{ session('status') }}</div>@endif
  @if(session('warning'))<div role="status" class="staff-alert warning">{{ session('warning') }}</div>@endif
  @if($errors->any())<div role="alert" class="staff-alert error">{{ $errors->first() }}</div>@endif
  <div class="staff-panel">
    <div class="staff-panel-head"><h2>Team Directory</h2><span>{{ $users->count() }} staff accounts</span></div>
    <div class="staff-table-wrap">
      <table id="basic-table" class="staff-table display">
        <thead><tr><th>Staff Member</th><th>Staff ID</th><th>Role</th><th>Status</th><th>Actions</th></tr></thead>
        <tbody>
          @foreach($users as $row)
            <tr>
              <td><div class="staff-person">
                <span class="staff-avatar">@if($row->attach)<img src="{{ asset('uploads/user/' . $row->attach) }}" alt="">@else{{ strtoupper(substr($row->name ?: 'S',0,1)) }}@endif</span>
                <span><strong>{{ $row->name }}</strong><small>{{ $row->email }}</small></span>
              </div></td>
              <td>{{ $row->staff_id ?: 'PF-' . str_pad((string) $row->id, 5, '0', STR_PAD_LEFT) }}</td>
              <td><span class="staff-role">{{ $row->roles->pluck('name')->implode(', ') ?: 'Unassigned' }}</span></td>
              <td><span class="staff-status {{ $row->status === 'inactive' ? 'off' : '' }}">{{ ucfirst($row->status ?? 'active') }}</span></td>
              <td>
                <div class="staff-actions">
                  @can('user-edit')<a href="{{ route('admin.user.edit', $row->id) }}" title="Edit staff"><i class="fa-solid fa-pen"></i> Edit</a>@endcan
                  @can('user-edit')
                    <form action="{{ route('admin.user.send.password', $row->id) }}" method="POST">@csrf<button type="submit" title="Email password setup or reset link"><i class="fa-solid fa-envelope"></i> Send setup link</button></form>
                  @endcan
                  @if($row->id !== auth()->id())
                    @can('user-delete')<button type="button" class="danger" onclick="openModal('deleteModal-{{ $row->id }}')" title="Delete staff"><i class="fa-solid fa-trash"></i></button>@include('admin.common.delete')@endcan
                  @endif
                </div>
              </td>
            </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection