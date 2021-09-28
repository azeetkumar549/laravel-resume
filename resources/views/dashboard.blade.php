<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                        <table class="table">
                           <thead>
                           <tr>
                                <th>id</th>
                                <th>name</th>
                                <th>email</th>
                                <th>contact</th>
                                <th>gender</th>
                                <th>nationality</th>
                                <th>address</th>
                                <th>skills</th>
                            </tr>
                           </thead>
                           <tbody>
                               @foreach ($user as $u)
                                <tr>
                                    <td>{{$u->id}}</td>
                                    <td>{{$u->name}}</td>
                                    <td>{{$u->email}}</td>
                                    <td>{{$u->contact}}</td>
                                    <td>{{$u->about->gender}}</td>
                                    <td>{{$u->about->nationality}}</td>
                                    <td>{{$u->about->street}}, {{$u->about->village}}, {{$u->about->city}} ({{ $u->about->state }}) - {{$u->about->pincode}}</td>
                                    <td>
                                        @foreach ($u->skills as $skill)
                                                {{ $skill->title }}
                                        @endforeach
                                    </td>
                                </tr>
                                @endforeach
                           </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
