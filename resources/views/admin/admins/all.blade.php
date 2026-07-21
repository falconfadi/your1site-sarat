@extends('admin.layouts.app')

@section('title')
    Admins
@endsection
@section('content')
    <main class="content">
        <div class="grid">
            <section class="col-12 card h-screen">
                <div class="card-head">
                    <div class="card-title-wrap">
                        <x-titles/>
                        <span class="badge text-xs font-light">{{ count($admins) }} RECORDS</span>
                    </div>
                    <x-modal id="create_admin">
                        <h3 class="text-base font-semibold leading-6 text-slate-900 dark:text-slate-100" id="modal-title mb-8">
                            Create New Admin
                        </h3>
                        <form class="space-y-5" action="{{route('admin.admins.create')}}" method="POST" id="create_admin">
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
                                <label for="email" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 text-left rtl:text-right">
                                    Email
                                </label>
                                <div class="mt-1.5">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                        class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                                </div>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 text-left rtl:text-right">
                                    Password
                                </label>
                                <div class="mt-1.5">
                                    <input id="password" name="password" type="password" autocomplete="password" required
                                        class="block w-full rounded-xl border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800 px-3.5 py-2.5 text-slate-900 dark:text-white placeholder-slate-400 dark:placeholder-slate-500 text-sm shadow-sm transition focus:border-blue-500 focus:outline-none focus:ring-2 focus:ring-blue-500/20">
                                </div>
                            </div>
                            <div>
                                <label for="password" class="block text-sm font-semibold text-slate-700 dark:text-slate-300 text-left rtl:text-right">
                                    Password confirmation
                                </label>
                                <div class="mt-1.5">
                                    <input id="password" name="password_confirmation" type="password" autocomplete="password" required
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
                                <th>Email</th>
                                <th>created_at</th>
                                <th>options</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($admins as $admin)
                                <tr>
                                    <td class="cell-name">#{{ $admin->id }}</td>
                                    <td>{{ $admin->name }}</td>
                                    <td>
                                        <span
                                            class="tag t-used">{{ $admin->email }}</span>
                                    </td>
                                    <td class="cell-date">
                                        {{ $admin->created_at->format('Y-m-d') }}
                                    </td>
                                    <td>
                                        @include('admin.partials.dropdown', [
                                            'links'=>[
                                                'edit' => [
                                                    'url'=>route('admin.admins.edit',['id'=>$admin->id]),
                                                    'icon' => 'bi-pencil',
                                                    ],
                                                'delete' => [
                                                    'url'=>route('admin.admins.delete',['id'=>$admin->id]),
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
