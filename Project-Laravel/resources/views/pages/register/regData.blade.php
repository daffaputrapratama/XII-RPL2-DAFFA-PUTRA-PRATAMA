@extends('layouts.main')


@section('data')

<div class="section-body">
          
                <div class="card">
                  <div class="card-header">
                    <h4>Data Register</h4>
                  </div>
                  <div class="card-body">
                    <div class="float-left">
                      <select class="form-control selectric">
                        <option>Action For Selected</option>
                        <option>Move to Draft</option>
                        <option>Move to Pending</option>
                        <option>Delete Pemanently</option>
                      </select>
                    </div>
                    <div class="float-right">
                      <form action="\search" method="GET">
                        @csrf
                        <div class="input-group">
                          <input type="text" class="form-control" name="cari" placeholder="Search">
                          <div class="input-group-append">
                            <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                          </div>
                        </div>
                      </form>
                    </div>

                    <div class="clearfix mb-3"></div>

                    <div class="table-responsive">
                      <table class="table table-striped">
                      @foreach($data as $p)
                        <tr>
                          <th class="text-center pt-2">
                          </th>
                          <th>Nama</th>
                          <th>Email</th>
                          <th>Password</th>

                        </tr>
                        <tr>
                          <td>
                          </td>
                          <td>{{$p->name}}
                            <div class="table-links">
                            <form action ="/hapus/{{$p->id}}" method="POST">
                            @method('delete')
                            @csrf
                            
                              <a href="#">View</a>
                              <div class="bullet"> </div>
                              <a href="#">Edit</a>
                              <div class="bullet"> </div>
                              <button type="submit" class="btn btn-danger" style="border:none;">Delete</button>     
          
                          </form>
                            </div>
                          </td>

                          <!-- name -->
                          <td>
                            <a href="#">{{$p->email}}</a>
                            
                          </td>
              
                          <td>{{$p->password}}</td>
                        </tr>
                        @endforeach
                      </table>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        

        @endsection