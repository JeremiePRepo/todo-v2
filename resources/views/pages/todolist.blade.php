@extends('layout')



@section('title','Ma todo-liste - TODOLIST Organizer')



@section('content')
<!-- todolist.content -->

    @include('parts.top-bar')
    @include('parts.menu')

    <!-- **********************************************************************************************************************************************************
    MAIN CONTENT
    *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
        <section class="wrapper">
            <h3><i class="fa fa-angle-right"></i> Ma TODO liste</h3>

            <!-- COMPLEX TO DO LIST -->
            <div class="row mt">
                <div class="col-md-12">
                    <section class="task-panel tasks-widget">
                        <div class="panel-heading">
                            <div class="pull-left"><h5><i class="fa fa-tasks"></i> Todo List - Complex Style</h5></div>
                            <br>
                        </div>
                        <div class="panel-body">
                            <div class="task-content">

                                <ul class="task-list">

                                    @foreach ($tasks as $task)
                                        <li>
                                            <div class="task-checkbox">
                                                <input type="checkbox" class="list-child" value=""  />
                                            </div>
                                            <div class="task-title">
                                                <span class="task-title-sp">{{ $task->task }}</span>
                                                @foreach ($task->ponderators as $ponderator)
                                                    <span class="badge bg-theme">{{ $ponderator->name }}</span>
                                                @endforeach
                                                <div class="pull-right hidden-phone">
                                                    <button class="btn btn-success btn-xs"><i class=" fa fa-check"></i></button>
                                                    <a class="btn btn-primary btn-xs" href="{!! url('todolist/' . $task->id . '/edit') !!}"><i class="fa fa-pencil"></i></a>
                                                    <button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>

                            <div class=" add-task-row">
                                <a class="btn btn-success btn-sm pull-left" href="{!! url('todolist/create') !!}">Nouvelle tâche</a>
                            </div>
                        </div>
                    </section>
                </div><!-- /col-md-12-->
            </div><!-- /row -->

        </section><!-- /wrapper -->
    </section><!-- /MAIN CONTENT -->

    <!--main content end-->

<!-- /todolist.content -->
@endsection
