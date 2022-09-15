@extends('layouts.main')


@section('form')

<div class="card-header">
<form method="POST" action="/dataTambah">
@csrf 
                    <h4>Input Your Data</h4>
                  </div>
                  <div class="card-body">
                    
                  <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIS</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="name">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Kelas</label>
                      <div class="col-sm-12 col-md-7">
                        <select class="form-control selectric" name="kelas">
                          <option>XI RPL 1</option>
                          <option>XI RPL 2</option>
                          <option>DKV 2</option>
                          <option>DKV 2</option>
                        </select>
                      </div>
                    </div>

                 
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">NIS</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="text" class="form-control inputtags" name="nis">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                      <div class="col-sm-12 col-md-7">
                        <div id="image-preview" class="image-preview">
                          <label for="image-upload" id="image-label">Choose File</label>
                          <input type="file" name="image" id="image-upload" />
                        </div>
                      </div>
                    </div>
                    
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Date</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="date" class="form-control inputtags" name="date">
                      </div>
                    </div>

                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
                      <div class="col-sm-12 col-md-7">
                        <input type="email" class="form-control inputtags" name="email">
                      </div>
                    </div>


                    
                   
                
                    <div class="form-group row mb-4">
                      <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                      <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create Post</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </form>
        </section>

    @endsection