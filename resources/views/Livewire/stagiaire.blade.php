@section('script')
<script src="{{asset('datatables-bs4/js/dataTables.boostrap.js')}}"></script>
<script src="{{asset('datatables-bs4/js/jquery.dataTables.js')}}"></script>
@endsection

@section('css')
<link rel="stylesheet" href="dataTables-bs4/css/dataTables.bootstrap.css">
@endsection

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Filiere</h1>
    </div>
    <div class="form-panel">
        <div class="row">
            <div class="col-md-9">
                <form wire:submit.prevent="submit">        
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="h5 control-label">Nom stagiaire</label>
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control @error('nom_filiere') is-invalid @enderror" wire:model="nom_filiere" autofocus>
                            @error('nom_filiere')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
        
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="h5 control-label">prenom</label>
                        </div>
                        <div class="form-group col-md-7">
                            <input type="text" class="form-control @error('niveau') is-invalid @enderror" wire:model="niveau" autofocus>
                            @error('niveau')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>
        
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label class="h5 control-label">civilite</label>
                        </div>
                        <div class="form-group col-md-7">
                        <div class="form-check">
                            <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="" id="" value="checkedValue" checked>
                            Display value
                          </label>
                        </div>
                        </div>
        
                    </div>
                    <div class="row">
        
                        <div class="col-md-4 pull-right">
                            <button type="button" class="btn btn-secondary">Annuler</button>
                            <button class="btn btn-primary" type="submit"><span data-feather="save"></span> Enregistrer</button>
                        </div>
                    </div>
        
                </form>
            </div>
            
                    
                  </div>
                
            </div>
        
        <div class="table-responsive mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Table Filiere</h3>
                        </div>

                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">

                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th scope="col">Nom Filiere</th>
                                        <th scope="col">Niveau</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                      

                                        <td>
                                            <button type="button" class="btn btn-sm btn-info" wire:click="edit({{$filiere->id}})">Edit</button>
                                            <button type="button" class="btn btn-sm btn-danger" onclick="confirm('voulez vous supprimer definitivement?') || event.stopImmediatePropagation()" class="btn btn-danger btn-xs" wire:click="delete({{$filiere->id}})">Delete</button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>