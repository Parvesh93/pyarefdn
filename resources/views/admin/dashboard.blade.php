@extends('admin.layouts.master')
@section('title')
Dashboard Overview
@endsection
@section('page_css')
<link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;600;700;800&family=Manrope:wght@500;600;700;800&display=swap" rel="stylesheet">
<style>
.pfs-dashboard{--ink:#171936;--orange:#f46226;--muted:#777f91;font-family:'DM Sans',sans-serif;color:var(--ink);padding:34px clamp(20px,3vw,48px) 60px;min-height:calc(100vh - 80px);background:#f7f8fb}
.pfs-dashboard *{box-sizing:border-box}
.pfs-dashboard h1,.pfs-dashboard h2,.pfs-dashboard h3{font-family:'Manrope',sans-serif;letter-spacing:-.035em}
.pfs-dashboard .dash-crumb{display:flex;align-items:center;gap:9px;color:#999eae;font-size:11px;font-weight:700;margin-bottom:13px}
.pfs-dashboard .dash-crumb strong{color:#f46226}
.pfs-dashboard .dash-head{display:flex;justify-content:space-between;align-items:flex-end;gap:20px;margin-bottom:28px;flex-wrap:wrap}
.pfs-dashboard .dash-head h1{font-size:clamp(26px,2.6vw,35px);font-weight:800;color:#181a39;margin:0 0 7px;line-height:1.2}
.pfs-dashboard .dash-head p{font-size:13px;color:#7b8290;margin:0;line-height:1.6}
.pfs-dashboard .dash-action{display:inline-flex;align-items:center;justify-content:center;gap:10px;padding:12px 17px;border-radius:9px;background:#f46226;color:#fff!important;text-decoration:none;font-size:12px;font-weight:800;white-space:nowrap}
.pfs-dashboard .dash-action:hover{background:#db4b17}
.pfs-dashboard .dash-stats{display:grid;grid-template-columns:repeat(4,minmax(0,1fr));gap:17px;margin-bottom:23px}
.pfs-dashboard .dash-stat{background:#fff;border:1px solid #e9eaf0;border-radius:13px;padding:22px 22px 19px;min-width:0;box-shadow:0 4px 24px #20234008}
.pfs-dashboard .dash-stat-top{display:flex;align-items:center;justify-content:space-between;gap:12px;margin-bottom:24px}
.pfs-dashboard .dash-stat-label{font-size:12px;color:#7c8390;font-weight:700}
.pfs-dashboard .dash-stat-icon{width:39px;height:39px;border-radius:10px;display:grid;place-items:center;font-size:18px}
.pfs-dashboard .dash-stat:nth-child(1) .dash-stat-icon{background:#fff0e8;color:#e45b28}
.pfs-dashboard .dash-stat:nth-child(2) .dash-stat-icon{background:#edeaff;color:#6955cd}
.pfs-dashboard .dash-stat:nth-child(3) .dash-stat-icon{background:#e7f5f2;color:#238b73}
.pfs-dashboard .dash-stat:nth-child(4) .dash-stat-icon{background:#eaf1ff;color:#5379c4}
.pfs-dashboard .dash-stat-number{font-size:clamp(24px,2.4vw,34px);font-weight:800;letter-spacing:-.045em;line-height:1.3;color:#191b3a;overflow-wrap:anywhere}
.pfs-dashboard .dash-stat-foot{margin-top:10px;font-size:11px;color:#9298a4;display:flex;align-items:center;gap:7px;flex-wrap:wrap}
.pfs-dashboard .dash-change{font-weight:800;padding:4px 7px;border-radius:5px}
.pfs-dashboard .dash-change.positive{color:#098363;background:#e7f8f1}
.pfs-dashboard .dash-change.negative{color:#c3474b;background:#fff0f1}
.pfs-dashboard .dash-panel{background:#fff;border:1px solid #e9eaf0;border-radius:13px;box-shadow:0 4px 24px #20234007;padding:25px;min-width:0}
.pfs-dashboard .dash-panel-head{display:flex;align-items:flex-start;justify-content:space-between;gap:18px;flex-wrap:wrap;margin-bottom:22px}
.pfs-dashboard .dash-panel-label{color:#f46226;font-size:10px;font-weight:800;letter-spacing:.14em;text-transform:uppercase;margin:0 0 8px}
.pfs-dashboard .dash-panel h2{font-size:19px;font-weight:800;line-height:1.3;color:#1a1b3b;margin:0}
.pfs-dashboard .dash-panel-sub{font-size:12px;line-height:1.7;color:#858d99;margin:6px 0 0}
.pfs-dashboard .dash-chart-value{font-weight:800;font-size:28px;line-height:1.3;letter-spacing:-.04em;color:#181a38;margin:14px 0 4px}
.pfs-dashboard .dash-filter{border:1px solid #e8e9ee;background:#fff;border-radius:8px;color:#343b50;padding:10px 13px;font-size:12px;min-width:142px;outline:none}
.pfs-dashboard .dash-filter:focus{border-color:#f46226}
.pfs-dashboard .dash-chart-box{width:100%;height:285px;position:relative}
.pfs-dashboard .dash-secondary{display:grid;grid-template-columns:minmax(0,1.5fr) minmax(275px,.8fr);gap:18px;margin-top:18px}
.pfs-dashboard .dash-table-wrap{overflow-x:auto;width:100%}
.pfs-dashboard .dash-table{width:100%;border-collapse:collapse;font-size:12px;min-width:460px}
.pfs-dashboard .dash-table th{font-size:10px;font-weight:800;letter-spacing:.085em;color:#959ba6;text-align:left;padding:13px 12px;border-bottom:1px solid #eef0f3;text-transform:uppercase}
.pfs-dashboard .dash-table td{padding:16px 12px;border-bottom:1px solid #f0f1f5;color:#535c6d;vertical-align:middle}
.pfs-dashboard .dash-table tr:last-child td{border-bottom:0}
.pfs-dashboard .dash-table strong{font-weight:800;color:#202442}
.pfs-dashboard .dash-table .dash-money{color:#202442;font-weight:800}
.pfs-dashboard .dash-status{background:#e9f8f1;color:#178263;padding:6px 9px;border-radius:20px;font-size:10px;font-weight:800;white-space:nowrap}
.pfs-dashboard .dash-empty{padding:30px 12px;color:#898f9e;font-size:13px;text-align:center}
.pfs-dashboard .dash-panel-link{font-size:12px;font-weight:800;color:#f46226;text-decoration:none}
.pfs-dashboard .dash-links{display:grid;gap:10px}
.pfs-dashboard .dash-link{display:flex;align-items:center;gap:13px;text-decoration:none;border:1px solid #eef0f3;background:#fff;border-radius:9px;padding:14px 13px;transition:background .2s,border-color .2s}
.pfs-dashboard .dash-link:hover{background:#fff9f5;border-color:#f7d5c7}
.pfs-dashboard .dash-link-icon{flex:none;width:38px;height:38px;display:grid;place-items:center;background:#fff0e9;border-radius:9px;color:#ef6229;font-size:17px}
.pfs-dashboard .dash-link strong{font-size:12px;font-weight:800;color:#212341;display:block;margin-bottom:4px}
.pfs-dashboard .dash-link small{font-size:11px;color:#9298a5;display:block}
.pfs-dashboard .dash-link-arrow{margin-left:auto;font-size:18px;color:#a0a5b0}
@media(max-width:1100px){.pfs-dashboard .dash-stats{grid-template-columns:repeat(2,minmax(0,1fr))}.pfs-dashboard .dash-secondary{grid-template-columns:1fr}}
@media(max-width:600px){.pfs-dashboard{padding:24px 16px 44px}.pfs-dashboard .dash-head{align-items:flex-start}.pfs-dashboard .dash-stats{gap:10px}.pfs-dashboard .dash-stat{padding:17px 14px}.pfs-dashboard .dash-stat-top{margin-bottom:14px}.pfs-dashboard .dash-stat-number{font-size:23px}.pfs-dashboard .dash-panel{padding:19px 16px}.pfs-dashboard .dash-chart-box{height:235px}.pfs-dashboard .dash-head h1{font-size:27px}}
</style>
@endsection

@section('adminContent')
<main class="pfs-dashboard">
  <div class="dash-crumb"><span>WORKSPACE</span><span>/</span><strong>OVERVIEW</strong></div>
  <div class="dash-head">
    <div><h1>Dashboard Overview</h1><p>Welcome back, {{ auth()->user()->name ?? 'Team Member' }}. Here's what's happening at Pyare Foundation.</p></div>
    @canany(['donation-create'])
      <a class="dash-action" href="{{ route('admin.donation.create') }}"><i class="fa-solid fa-plus" aria-hidden="true"></i> Add Donation</a>
    @endcanany
  </div>
  <div class="dash-stats">
    <article class="dash-stat"><div class="dash-stat-top"><span class="dash-stat-label">Total Donations</span><span class="dash-stat-icon"><i class="fa-solid fa-hand-holding-heart"></i></span></div><div class="dash-stat-number">{{ $setting->currency_symbol ?? '₹' }}{{ number_format($total_donations->sum('amount'), 0) }}</div><div class="dash-stat-foot"><span class="dash-change {{ $percentageChangeDonation >= 0 ? 'positive' : 'negative' }}">{{ $percentageChangeDonation >= 0 ? '↗' : '↘' }} {{ abs($percentageChangeDonation) }}%</span><span>vs previous month</span></div></article>
    <article class="dash-stat"><div class="dash-stat-top"><span class="dash-stat-label">Total Donors</span><span class="dash-stat-icon"><i class="fa-solid fa-users"></i></span></div><div class="dash-stat-number">{{ number_format($total_donors->count()) }}</div><div class="dash-stat-foot"><span class="dash-change {{ $donorPercentageChange >= 0 ? 'positive' : 'negative' }}">{{ $donorPercentageChange >= 0 ? '↗' : '↘' }} {{ abs($donorPercentageChange) }}%</span><span>year comparison</span></div></article>
    <article class="dash-stat"><div class="dash-stat-top"><span class="dash-stat-label">Total Volunteers</span><span class="dash-stat-icon"><i class="fa-solid fa-people-group"></i></span></div><div class="dash-stat-number">{{ number_format($total_volunteers->count()) }}</div><div class="dash-stat-foot"><span class="dash-change {{ $volunteerPercentageChange >= 0 ? 'positive' : 'negative' }}">{{ $volunteerPercentageChange >= 0 ? '↗' : '↘' }} {{ abs($volunteerPercentageChange) }}%</span><span>year comparison</span></div></article>
    <article class="dash-stat"><div class="dash-stat-top"><span class="dash-stat-label">Total Campaigns</span><span class="dash-stat-icon"><i class="fa-solid fa-bullhorn"></i></span></div><div class="dash-stat-number">{{ number_format($campaignCount) }}</div><div class="dash-stat-foot"><span>Registered fundraising campaigns</span></div></article>
  </div>
  <section class="dash-panel">
    <div class="dash-panel-head">
      <div><p class="dash-panel-label">FUNDRAISING PERFORMANCE</p><h2>Donation Analytics</h2><div class="dash-chart-value">{{ $setting->currency_symbol ?? '₹' }}{{ number_format($totalDonations, 0) }}</div><p class="dash-panel-sub">{{ $monthName }} · {{ $daysInMonth }} days · {{ $percentageChange >= 0 ? '+' : '' }}{{ $percentageChange }}% compared with previous month</p></div>
      <form method="GET" action="{{ route('admin.dashboard.index') }}"><label class="sr-only" for="dash-month">Select reporting month</label><select id="dash-month" class="dash-filter" name="month" onchange="this.form.submit()">@foreach($months as $value => $label)<option value="{{ $value }}" {{ $selectedMonth == $value ? 'selected' : '' }}>{{ $label }}</option>@endforeach</select></form>
    </div>
    <div class="dash-chart-box"><canvas id="donationChart" aria-label="Donation amounts by day for {{ $monthName }}" role="img"></canvas></div>
  </section>
  <div class="dash-secondary">
    <section class="dash-panel">
      <div class="dash-panel-head"><div><p class="dash-panel-label">LATEST ACTIVITY</p><h2>Recent Donations</h2><p class="dash-panel-sub">Recent successful and recorded donations</p></div>@canany(['donation-view'])<a class="dash-panel-link" href="{{ route('admin.donation.index') }}">View all ↗</a>@endcanany</div>
      <div class="dash-table-wrap"><table class="dash-table"><thead><tr><th>Donor</th><th>Date</th><th>Amount</th><th>Status</th></tr></thead><tbody>
      @forelse($total_donations->sortByDesc('created_at')->take(6) as $donation)
        <tr><td><strong>{{ trim(($donation->first_name ?? '') . ' ' . ($donation->last_name ?? '')) ?: ($donation->email ?? 'Donor') }}</strong></td><td>{{ optional($donation->created_at)->format('d M Y') ?? '—' }}</td><td class="dash-money">{{ $setting->currency_symbol ?? '₹' }}{{ number_format($donation->amount ?? 0, 0) }}</td><td><span class="dash-status">{{ ucfirst($donation->payment_status ?? 'Recorded') }}</span></td></tr>
      @empty
        <tr><td colspan="4" class="dash-empty">No donations to display yet.</td></tr>
      @endforelse
      </tbody></table></div>
    </section>
    <section class="dash-panel">
      <div class="dash-panel-head"><div><p class="dash-panel-label">SHORTCUTS</p><h2>Quick Actions</h2><p class="dash-panel-sub">Jump straight to your workspace tools</p></div></div>
      <div class="dash-links">
        @canany(['campaign-view','campaign-create'])<a class="dash-link" href="{{ route('admin.campaign.index') }}"><span class="dash-link-icon"><i class="fa-solid fa-bullhorn"></i></span><span><strong>Manage Campaigns</strong><small>View and update campaigns</small></span><span class="dash-link-arrow">↗</span></a>@endcanany
        @canany(['donation-view','donation-create'])<a class="dash-link" href="{{ route('admin.donation.index') }}"><span class="dash-link-icon"><i class="fa-solid fa-hand-holding-heart"></i></span><span><strong>Donation Records</strong><small>Review contributions</small></span><span class="dash-link-arrow">↗</span></a>@endcanany
        @canany(['volunteer-view','volunteer-create'])<a class="dash-link" href="{{ route('admin.volunteer.index') }}"><span class="dash-link-icon"><i class="fa-solid fa-people-group"></i></span><span><strong>Volunteers</strong><small>Manage volunteer records</small></span><span class="dash-link-arrow">↗</span></a>@endcanany
        @canany(['event-view','event-create'])<a class="dash-link" href="{{ route('admin.event.index') }}"><span class="dash-link-icon"><i class="fa-regular fa-calendar-days"></i></span><span><strong>Events</strong><small>Manage activities and events</small></span><span class="dash-link-arrow">↗</span></a>@endcanany
      </div>
    </section>
  </div>
</main>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var el = document.getElementById('donationChart');
  if (!el || typeof Chart === 'undefined') return;
  new Chart(el.getContext('2d'), {
    type:'line',
    data:{labels:@json($labels),datasets:[{label:'Donations',data:@json($donationData),borderColor:'#f46226',backgroundColor:'rgba(244,98,38,.09)',fill:true,tension:.35,pointRadius:2.5,pointHoverRadius:5,borderWidth:2.5}]},
    options:{responsive:true,maintainAspectRatio:false,interaction:{intersect:false,mode:'index'},plugins:{legend:{display:false},tooltip:{backgroundColor:'#171936',padding:11,cornerRadius:7}},scales:{y:{beginAtZero:true,grid:{color:'#f0f1f5'},ticks:{color:'#89909d',callback:function(value){return '{{ $setting->currency_symbol ?? '₹' }}'+Number(value).toLocaleString('en-IN')}}},x:{grid:{display:false},ticks:{color:'#89909d',maxTicksLimit:12}}}}
  });
});
</script>
@endsection
