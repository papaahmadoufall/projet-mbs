
@extends('layouts.master')
@section('content')
    <!-- Sidebar -->
@include('sidebar.dashboard')

    <!-- /Sidebar -->

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Dashboard <span id="year"></span></h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Message</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Ajouter une tarification</a>
                    </div>
                </div>
            </div>
            <!-- Leave Statistics -->
            {{-- <div class="row mx-auto">
                <div class="col-md-3 ">
                    <div class="stats-info">
                        <h6>Nombre de message</h6>
                        <h4>{{$tarification->count()}}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-info">
                        <h6>message Lu</h6>
                        <h4>{{$messageLu}}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-info">
                        <h6>Message non lu</h6>
                        <h4>{{$messageNonLu}}</h4>
                    </div>
                </div>

            </div> --}}
            <!-- /Leave Statistics -->

            <div class="row">
                {!! Toastr::message() !!}

                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Nom</th>

                                    <th>Catégorie</th>
                                    <th>Prix</th>
                                    <th>Pays</th>

                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $tarification as $t )

                                <tr>

                                    <td>{{$t->nom}}</td>
                                    <td>{{$t->category}}</td>

                                    <td>{{$t->prix}}</td>
                                    <td>{{$t->pays}}</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave"><i class="fa fa-pencil m-r-5"></i> Modifier </a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>

        <!-- Delete Leave Modal -->
        <div class="modal custom-modal fade" id="delete_approve" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Leave</h3>
                            <p>Are you sure want to Cancel this leave?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="{{route('destroyTarif',$t->id)}}" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Leave Modal -->
                                @endforeach

                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /Page Content -->

		<!-- Add Leave Modal -->
        <div id="add_leave" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter une tarification</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('addTarification')}}">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label>Pays  <span class="text-danger">*</span></label>
                                <select name="pays" class="select">
                                    <option>Selectionner le pays</option>
                                    <option value="senegal">Sénégal</option>
                                    <option value="cote d'ivoire" >Cote d'ivoire</option>
                                    <option value="mali" >Mali</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Nom <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input name="nom" class="form-control " type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Prix <span class="text-danger">*</span></label>
                                <div class="cal-icon">
                                    <input name="prix" class="form-control " type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Catégorie <span class="text-danger">*</span></label>
                                <select name="category" class="select">
                                    <option>Selectionner la catégorie</option>
                                    <option value="sac" >Sac</option>
                                    <option value="valise">Valise</option>
                                    <option value="sac_a_dos">Sac a dos</option>
                                </select>
                            </div>

                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Leave Modal -->

        <!-- Edit Leave Modal -->
        {{-- <div id="edit_leave" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Nom de la tarification {{ $tarific->nom }}</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <div class="col-12">
                            {{}}
                    </div>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- /Edit Leave Modal -->


    </div>
    <!-- /Page Wrapper -->
@endsection
