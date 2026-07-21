@extends('admin.layouts.app')

@section('title')
    Settings
@endsection
@section('content')
    <main class="content">
        <div class="grid">
            <section class="col-12 card h-screen">
                <div class="card-head">
                    <div class="card-title-wrap">
                        <x-titles/>
                        <span class="badge text-xs font-light">{{ count($settings) }} RECORDS</span>
                    </div>
                    <x-modal id="create_setting">
                        <h3 class="text-base font-semibold leading-6 text-slate-900 dark:text-slate-100" id="modal-title mb-8">
                            Create New Setting
                        </h3>
                        <form class="space-y-5" action="{{route('admin.settings.create')}}" method="POST" id="create_setting">
                            @csrf
                            <div>
                                <label for="name" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 text-left rtl:text-right">
                                    Name
                                </label>
                                <div class="mt-1.5">
                                    <input id="name" name="name" type="text" autocomplete="name" required
                                        class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                                </div>
                            </div>

                            <div>
                                <label for="value" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 text-left rtl:text-right">
                                    Value
                                </label>
                                <div class="mt-1.5">
                                    <input id="value" name="value" type="value" autocomplete="value" required
                                        class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                                </div>
                            </div>
                        </form>
                    </x-modal>
                </div>
                <div class="table-scroll h-full">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>id</th>
                                <th>Name</th>
                                <th>Value</th>
                                <th>created_at</th>
                                <th>Opteions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($settings as $setting)
                                <tr>
                                    <td class="cell-name">#{{ $setting->id }}</td>
                                    <td>{{ $setting->name }}</td>
                                    <td>
                                        <span
                                            class="tag t-used">{{ $setting->value }}</span>
                                    </td>
                                    <td class="cell-date">
                                        {{ $setting->created_at->format('Y-m-d') }}
                                    </td>
                                    <td>
                                        @include('admin.partials.dropdown', [
                                            'links'=>[
                                                'edit' => [
                                                    'url'=>route('admin.settings.edit',['id'=>$setting->id]),
                                                    'icon' => 'bi-pencil',
                                                    ],
                                                'delete' => [
                                                    'url'=>route('admin.settings.delete',['id'=>$setting->id]),
                                                    'icon' => 'bi-trash',
                                                    ]
                                            ] 
                                        ])
                                    </td>
                                </tr>
                            @empty
                                <h2 class="text-2xl text-red-600">no result found
                                </h2>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
    </main>
@endsection
