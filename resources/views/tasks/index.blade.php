<x-app-layout>
    <link href="css3/app.css" rel="stylesheet">
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Patient List
        </h2>
    </x-slot>
    <style>
        .buttons {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            text-align: center;
            width: 100%;
            height: 100%;
            margin: 0 auto;
            /*   padding: 2em 0em; */
        }

        .btn {
            letter-spacing: 0.1em;
            cursor: pointer;
            font-size: 14px;
            font-weight: 400;
            line-height: 45px;
            max-width: 160px;
            position: relative;
            text-decoration: none;
            text-transform: uppercase;
            width: 100%;
        }
        .btn:hover {
            text-decoration: none;
        }

        /*btn_background*/
        .effect01 {
            color: #FFF;
            border: 4px solid #000;
            box-shadow:0px 0px 0px 1px #000 inset;
            background-color: #000;
            overflow: hidden;
            position: relative;
            transition: all 0.3s ease-in-out;
        }
        .effect01:hover {
            border: 4px solid #666;
            background-color: #FFF;
            box-shadow:0px 0px 0px 4px #EEE inset;
        }

        /*btn_text*/
        .effect01 span {
            transition: all 0.2s ease-out;
            z-index: 2;
        }
        .effect01:hover span{
            letter-spacing: 0.13em;
            color: #333;
        }

        /*highlight*/
        .effect01:after {
            background: #FFF;
            border: 0px solid #000;
            content: "";
            height: 155px;
            left: -75px;
            opacity: .8;
            position: absolute;
            top: -50px;
            -webkit-transform: rotate(35deg);
            transform: rotate(35deg);
            width: 50px;
            transition: all 1s cubic-bezier(0.075, 0.82, 0.165, 1);/*easeOutCirc*/
            z-index: 1;
        }
        .effect01:hover:after {
            background: #FFF;
            border: 20px solid #000;
            opacity: 0;
            left: 120%;
            -webkit-transform: rotate(40deg);
            transform: rotate(40deg);
        }
    </style>
    <div class="flex flex-col">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <div class="max-w-6xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="block mb-8">
                <div class="buttons">
                <a href="{{ route('tasks.create') }}" class="btn effect01" target="_blank"><span>Add Patient</span></a>
            </div>
                <main class="content">
                    <div class="container-fluid p-0">

                        <div class="row mb-2 mb-xl-3">
                            <div class="col-auto d-none d-sm-block">
                                <h3><strong>Analytics</strong> Dashboard</h3>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-xxl-5 d-flex">
                                    <div class="w-100">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-4">Total Cases</h5>
                                                        <h1 class="mt-1 mb-3">{{$count}}</h1>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-4">Total Death</h5>
                                                        <h1 class="mt-1 mb-3">{{$deceased}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-4">Total Active</h5>
                                                        <h1 class="mt-1 mb-3">{{$count}}</h1>
                                                    </div>
                                                </div>
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h5 class="card-title mb-4">Total Recovered</h5>
                                                        <h1 class="mt-1 mb-3">{{$recovered}}</h1>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-xl-6 col-xxl-7">
                                    <div class="card flex-fill w-100">
                                        <div class="card-header">

                                            <h5 class="card-title mb-0">Recent Movement</h5>
                                        </div>
                                        <div class="card-body py-3">
                                            <div class="chart chart-sm">
                                                <script src="https://apps.elfsight.com/p/platform.js" defer></script>
                                                <div class="elfsight-app-442e40b6-9581-4366-8f68-a487b81b368f"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
            </div>
                            <div class="row">
                                    <div class="card flex-fill">
                                        <table class="table table-hover my-0">
                                            <thead>
                                            <tr>
                                                <th>Firstname</th>
                                                <th class="d-none d-xl-table-cell">Lastname</th>
                                                <th class="d-none d-xl-table-cell">Age</th>
                                                <th class="d-none d-md-table-cell">Address</th>
                                                <th class="d-none d-md-table-cell">Symptoms</th>
                                                <th>Status</th>
                                                <th class="d-none d-md-table-cell" style="text-align: center;">Modify</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach ($tasks as $task)
                                                <tr>
                                                    <td class="d-none d-xl-table-cell">{{ $task->firstname }}</td>
                                                    <td class="d-none d-xl-table-cell">{{ $task->lastname }}</td>
                                                    <td class="d-none d-md-table-cell">{{ $task->age }}</td>
                                                    <td class="d-none d-md-table-cell">{{ $task->address }}</td>
                                                    <td class="d-none d-md-table-cell">{{ $task->symptoms }}</td>
                                                    <td><span class="badge bg-success">{{ $task->status }}</span></td>
                                                    <td class="d-none d-md-table-cell" style="text-align: center;">
                                                        <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-600 hover:text-blue-900 mb-2 mr-2">View</a>
                                                        <a href="{{ route('tasks.edit', $task->id) }}" class="text-indigo-600 hover:text-indigo-900 mb-2 mr-2">Edit</a>
                                                        <form class="inline-block" action="{{ route('tasks.destroy', $task->id) }}" method="POST" onsubmit="return confirm('Are you sure?');">
                                                            <input type="hidden" name="_method" value="DELETE">
                                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                            <input type="submit" class="text-red-600 hover:text-red-900 mb-2 mr-2" value="Delete">
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
    </main>
                    </div>
            </div>
        </div>
    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js3/app.js"></script>
    <script src="https://cdnjs.cloudfare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js" charset="utf-8"></script>
</x-app-layout>
