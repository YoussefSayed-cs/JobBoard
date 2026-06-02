<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
            <div>
                <h2 class="font-black text-3xl text-slate-900 tracking-tight">
                    Dashboard Overview
                </h2>
                <p class="text-sm text-slate-500 mt-1 font-medium">
                    Welcome back! Here is your platform's latest performance data.
                </p>
            </div>
            <div class="flex items-center gap-3 bg-white px-4 py-2 rounded-xl shadow-sm border border-slate-100">
                <svg class="w-5 h-5 text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                </svg>
                <span class="text-sm font-semibold text-slate-700">{{ now()->format('l, F j, Y') }}</span>
            </div>
        </div>
    </x-slot>

    <div class="max-w-7xl mx-auto py-8 sm:px-6 lg:px-8 space-y-6">

        {{-- ===== STATS CARDS ===== --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-5">

            {{-- Users --}}
            <div     class="relative bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden
                        hover:-translate-y-1 hover:shadow-lg transition-all duration-200 group">
                <div class="absolute top-0 left-0 right-0 h-1 bg-blue-500"></div>
                <div class="p-6 pt-7">
                    <div class="w-10 h-10 rounded-xl bg-blue-50 text-blue-600 flex items-center justify-center
                                group-hover:bg-blue-600 group-hover:text-white transition-all duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857
                                   M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857
                                   m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                    </div>
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mt-5">Total Users</p>
                    <p class="text-4xl font-black text-slate-900 mt-1 tracking-tight">
                        {{ number_format($analytics['activeUsers']) }}
                    </p>
                    <p class="text-xs text-slate-400 mt-2">Active users on the platform</p>
                </div>
            </div>

            {{-- Jobs --}}
            <div class="relative bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden
                        hover:-translate-y-1 hover:shadow-lg transition-all duration-200 group">
                <div class="absolute top-0 left-0 right-0 h-1 bg-violet-500"></div>
                <div class="p-6 pt-7">
                    <div class="w-10 h-10 rounded-xl bg-violet-50 text-violet-600 flex items-center justify-center
                                group-hover:bg-violet-600 group-hover:text-white transition-all duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0
                                   00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0
                                   00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                    </div>
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mt-5">Total Jobs</p>
                    <p class="text-4xl font-black text-slate-900 mt-1 tracking-tight">
                        {{ number_format($analytics['totalJob']) }}
                    </p>
                    <p class="text-xs text-slate-400 mt-2">Job listings currently posted</p>
                </div>
            </div>

            {{-- Applications --}}
            <div class="relative bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden
                        hover:-translate-y-1 hover:shadow-lg transition-all duration-200 group">
                <div class="absolute top-0 left-0 right-0 h-1 bg-amber-400"></div>
                <div class="p-6 pt-7">
                    <div class="w-10 h-10 rounded-xl bg-amber-50 text-amber-500 flex items-center justify-center
                                group-hover:bg-amber-500 group-hover:text-white transition-all duration-200">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0
                                   01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                    </div>
                    <p class="text-xs font-bold uppercase tracking-widest text-slate-400 mt-5">Applications</p>
                    <p class="text-4xl font-black text-slate-900 mt-1 tracking-tight">
                        {{ number_format($analytics['totalapplications']) }}
                    </p>
                    <p class="text-xs text-slate-400 mt-2">Total submitted applications</p>
                </div>
            </div>
        </div>

        {{-- ===== CHARTS ===== --}}
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            {{-- Overview Bar Chart --}}
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-base font-bold text-slate-800">System Overview</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Platform metrics at a glance</p>
                    </div>
                    <div class="flex gap-3 text-xs text-slate-500">
                        <span class="flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-sm inline-block" style="background:#378ADD"></span>Users
                        </span>
                        <span class="flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-sm inline-block" style="background:#7F77DD"></span>Jobs
                        </span>
                        <span class="flex items-center gap-1.5">
                            <span class="w-2.5 h-2.5 rounded-sm inline-block" style="background:#EF9F27"></span>Applications
                        </span>
                    </div>
                </div>
                <div class="relative w-full" style="height: 260px;">
                    <canvas id="overviewChart" role="img" aria-label="Bar chart showing total users, jobs, and applications"></canvas>
                </div>
            </div>

            {{-- Conversion Doughnut Chart --}}
            <div class="bg-white rounded-2xl border border-slate-200 shadow-sm p-6 hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
                <div class="flex items-start justify-between mb-4">
                    <div>
                        <h3 class="text-base font-bold text-slate-800">Conversion Rates</h3>
                        <p class="text-xs text-slate-400 mt-0.5">Application to views ratio per job</p>
                    </div>
                </div>
                <div id="donut-legend" class="flex flex-wrap gap-x-4 gap-y-1.5 mb-4 text-xs text-slate-500"></div>
                <div class="relative w-full" style="height: 220px;">
                    <canvas id="conversionChart" role="img" aria-label="Doughnut chart showing conversion rates per job"></canvas>
                </div>
            </div>
        </div>

        {{-- ===== MOST APPLIED JOBS TABLE ===== --}}
        <div class="bg-white rounded-2xl border border-slate-200 shadow-sm overflow-hidden hover:-translate-y-1 hover:shadow-lg transition-all duration-200">
            <div class="px-6 py-4 border-b border-slate-100 bg-slate-50/60 flex items-center justify-between">
                <div>
                    <h3 class="text-base font-bold text-slate-800">Most Popular Jobs</h3>
                    <p class="text-xs text-slate-400 mt-0.5">Jobs receiving the highest volume of applications</p>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-sm" style="table-layout: fixed;">
                    <colgroup>
                        <col style="width: 42%">
                        <col style="width: 25%">
                        <col style="width: 18%">
                        <col style="width: 15%">
                    </colgroup>
                    <thead class="bg-slate-50 border-b border-slate-100">
                        <tr>
                            <th class="px-5 py-3 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">Rank & Job Title</th>
                            <th class="px-5 py-3 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">Company</th>
                            <th class="px-5 py-3 text-left text-xs font-bold text-slate-400 uppercase tracking-wider">Type</th>
                            <th class="px-5 py-3 text-right text-xs font-bold text-slate-400 uppercase tracking-wider">Applicants</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($analytics['mostAppliedJobs'] as $index => $job)
                        <tr class="hover:bg-indigo-50/30 transition-colors group">
                            <td class="px-5 py-3.5">
                                <div class="flex items-center gap-3">
                                    <span class="flex-shrink-0 w-7 h-7 rounded-full text-xs font-bold flex items-center justify-center
                                        @if($index === 0) bg-amber-100 text-amber-700
                                        @elseif($index === 1) bg-slate-100 text-slate-600
                                        @elseif($index === 2) bg-orange-100 text-orange-700
                                        @else bg-slate-50 text-slate-400 @endif">
                                        #{{ $index + 1 }}
                                    </span>
                                    <span class="font-semibold text-slate-800 group-hover:text-indigo-600 transition-colors truncate">
                                        {{ $job->title }}
                                    </span>
                                </div>
                            </td>
                            <td class="px-5 py-3.5">
                                <span class="text-slate-500 font-medium truncate block">
                                    {{ $job->company->name ?? '—' }}
                                </span>
                            </td>
                            <td class="px-5 py-3.5">
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-semibold
                                            bg-slate-100 text-slate-600 border border-slate-200">
                                    {{ $job->type }}
                                </span>
                            </td>
                            <td class="px-5 py-3.5 text-right">
                                <span class="inline-flex items-center justify-center px-3 py-1 rounded-lg text-xs font-bold
                                            bg-blue-50 text-blue-700 border border-blue-100
                                            group-hover:bg-blue-100 transition-colors">
                                    {{ number_format($job->totalCount) }}
                                </span>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="4" class="px-6 py-14 text-center">
                                <div class="flex flex-col items-center gap-2 text-slate-400">
                                    <svg class="w-10 h-10" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                                            d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2
                                               0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0
                                               01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"/>
                                    </svg>
                                    <p class="text-sm font-medium">No application data available yet.</p>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    {{-- ===== SCRIPTS ===== --}}
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // ---- بيانات من Laravel بالطريقة الصح ----
        const analyticsData = {
            activeUsers:      @json($analytics['activeUsers']),
            totalJob:         @json($analytics['totalJob']),
            totalapplications: @json($analytics['totalapplications']),
        };

        const convLabels = @json($analytics['conversionRates']->pluck('title'));

        const convData =  @json($analytics['conversionRates']->pluck('conversionRate'));

        // ---- Shared tooltip config ----
        const tooltipDefaults = {
            backgroundColor: 'rgba(15,23,42,0.92)',
            padding: 10,
            cornerRadius: 8,
            titleFont: { size: 12, weight: '600' },
            bodyFont:  { size: 13 }
        };

        // ---- Overview Bar Chart ----
        new Chart(document.getElementById('overviewChart'), {
            type: 'bar',
            data: {
                labels: ['Total Users', 'Vacancies', 'Applications'],
                datasets: [{
                    label: 'Total Count',
                    data: [
                        analyticsData.activeUsers,
                        analyticsData.totalJob,
                        analyticsData.totalapplications
                    ],
                    backgroundColor: ['#378ADD', '#7F77DD', '#EF9F27'],
                    borderWidth:   0,
                    borderRadius:  7,
                    barThickness:  44,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        ...tooltipDefaults,
                        callbacks: {
                            label: ctx => '  ' + ctx.raw.toLocaleString()
                        }
                    }
                },
                scales: {
                    y: {
                        beginAtZero: true,
                        grid: { color: 'rgba(0,0,0,0.04)', drawBorder: false },
                        ticks: {
                            color: '#94a3b8',
                            font: { size: 11 },
                            padding: 8,
                            callback: v => v >= 1000 ? (v / 1000).toFixed(1) + 'k' : v
                        }
                    },
                    x: {
                        grid: { display: false, drawBorder: false },
                        ticks: { color: '#64748b', font: { size: 12, weight: '600' }, padding: 8 }
                    }
                },
                animation: { duration: 1200, easing: 'easeOutQuart' }
            }
        });

        // ---- Conversion Doughnut Chart ----
        const convColors = ['#378ADD', '#7F77DD', '#1D9E75', '#EF9F27', '#D4537E'];

        const allZero    = convData.length === 0 || convData.every(v => parseFloat(v) === 0);
        const finalLabels = (allZero && convLabels.length === 0) ? ['No Data'] : convLabels;
        const finalData   = allZero ? finalLabels.map(() => 1) : convData;
        const finalColors = (allZero && finalLabels[0] === 'No Data') ? ['#e2e8f0'] : convColors;

        // Build custom legend
        const legendEl = document.getElementById('donut-legend');
        finalLabels.forEach((label, i) => {
            if (label === 'No Data') return;
            const val = allZero ? '0%' : (parseFloat(finalData[i]).toFixed(1) + '%');
            const color = finalColors[i] ?? convColors[i % convColors.length];
            legendEl.innerHTML += `
                <span class="flex items-center gap-1.5">
                    <span class="w-2.5 h-2.5 rounded-sm inline-block flex-shrink-0"
                          style="background:${color}"></span>
                    ${label} ${val}
                </span>`;
        });

        new Chart(document.getElementById('conversionChart'), {
            type: 'doughnut',
            data: {
                labels: finalLabels,
                datasets: [{
                    data:            finalData,
                    backgroundColor: finalColors,
                    borderColor:     '#ffffff',
                    borderWidth:     3,
                    hoverOffset:     6
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                cutout: '70%',
                plugins: {
                    legend: { display: false },
                    tooltip: {
                        ...tooltipDefaults,
                        callbacks: {
                            label: ctx => allZero
                                ? ' ' + ctx.label + ': 0%'
                                : ' ' + ctx.label + ': ' + parseFloat(ctx.raw).toFixed(1) + '%'
                        }
                    }
                },
                animation: { duration: 1400, easing: 'easeOutQuart', delay: 150 }
            }
        });
    </script>
</x-app-layout>
